<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nomination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class NominationDashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = Nomination::query()->latest();

        if ($request->filled('search')) {
            $query->search($request->search);
        }

        if ($request->filled('status')) {
            $query->byStatus($request->status);
        }

        if ($request->filled('category')) {
            $query->byCategory($request->category);
        }

        $nominations = $query->paginate(20);

        $stats = [
            'total' => Nomination::count(),
            'pending' => Nomination::byStatus('pending')->count(),
            'under_review' => Nomination::byStatus('under_review')->count(),
            'shortlisted' => Nomination::byStatus('shortlisted')->count(),
            'rejected' => Nomination::byStatus('rejected')->count(),
            'winner' => Nomination::byStatus('winner')->count(),
        ];

        $categories = Nomination::select('award_category')
            ->distinct()
            ->pluck('award_category');

        return view('admin.nominations.index', compact('nominations', 'stats', 'categories'));
    }

    public function show(Nomination $nomination)
    {
        return view('admin.nominations.show', compact('nomination'));
    }

    public function updateStatus(Request $request, Nomination $nomination)
    {
        $request->validate([
            'status' => 'required|in:pending,under_review,shortlisted,rejected,winner',
            'admin_notes' => 'nullable|string',
        ]);

        $nomination->update([
            'status' => $request->status,
            'admin_notes' => $request->admin_notes,
        ]);

        return redirect()->back()->with('success', 'Nomination status updated successfully.');
    }

    public function destroy(Nomination $nomination)
    {
        $nomination->delete();
        return redirect()->route('admin.nominations.index')->with('success', 'Nomination deleted successfully.');
    }

    public function export(Request $request)
    {
        $query = Nomination::query()->latest();

        if ($request->filled('status')) {
            $query->byStatus($request->status);
        }

        if ($request->filled('category')) {
            $query->byCategory($request->category);
        }

        $nominations = $query->get();

        $filename = 'nominations_' . now()->format('Y-m-d_His') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function() use ($nominations) {
            $file = fopen('php://output', 'w');

            fputcsv($file, [
                'ID',
                'Submitted Date',
                'Nominee Name',
                'Nominee Job Title',
                'Nominee Company',
                'Nominee City',
                'Nominee County',
                'Nominee Email',
                'Nominee Contact',
                'Nominee LinkedIn',
                'Nominator Name',
                'Nominator Job Title',
                'Nominator Company',
                'Nominator Email',
                'Nominator Contact',
                'Award Category',
                'Question 1',
                'Question 2',
                'Question 3',
                'Question 4',
                'Status',
                'Admin Notes',
            ]);

            foreach ($nominations as $nomination) {
                fputcsv($file, [
                    $nomination->id,
                    $nomination->created_at->format('Y-m-d H:i:s'),
                    $nomination->nominee_full_name,
                    $nomination->nominee_job_title,
                    $nomination->nominee_company,
                    $nomination->nominee_city,
                    $nomination->nominee_county,
                    $nomination->nominee_email,
                    $nomination->nominee_contact,
                    $nomination->nominee_linkedin,
                    $nomination->nominator_full_name,
                    $nomination->nominator_job_title,
                    $nomination->nominator_company,
                    $nomination->nominator_email,
                    $nomination->nominator_contact,
                    $nomination->award_category,
                    $nomination->question_1,
                    $nomination->question_2,
                    $nomination->question_3,
                    $nomination->question_4,
                    $nomination->status,
                    $nomination->admin_notes,
                ]);
            }

            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }

    public function bulkAction(Request $request)
    {
        $request->validate([
            'action' => 'required|in:delete,update_status',
            'nominations' => 'required|array',
            'nominations.*' => 'exists:nominations,id',
            'status' => 'required_if:action,update_status|in:pending,under_review,shortlisted,rejected,winner',
        ]);

        $nominations = Nomination::whereIn('id', $request->nominations);

        if ($request->action === 'delete') {
            $nominations->delete();
            return redirect()->back()->with('success', 'Selected nominations deleted successfully.');
        }

        if ($request->action === 'update_status') {
            $nominations->update(['status' => $request->status]);
            return redirect()->back()->with('success', 'Selected nominations status updated successfully.');
        }

        return redirect()->back();
    }
}
