<?php

namespace App\Http\Controllers;

use App\Models\Nomination;
use Illuminate\Http\Request;

class NominationsController extends Controller
{
    public function index()
    {
        return view('pages.nominations');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nominee_first_name' => 'required|string|max:255',
            'nominee_last_name' => 'required|string|max:255',
            'nominee_job_title' => 'required|string|max:255',
            'nominee_company' => 'required|string|max:255',
            'nominee_city' => 'required|string|max:255',
            'nominee_county' => 'required|string|max:255',
            'nominee_email' => 'required|email|max:255',
            'nominee_contact' => 'required|string|max:255',
            'nominee_linkedin' => 'nullable|url|max:255',
            'nominator_name' => 'required|string|max:255',
            'nominator_surname' => 'required|string|max:255',
            'nominator_job_title' => 'required|string|max:255',
            'nominator_company' => 'required|string|max:255',
            'nominator_city' => 'required|string|max:255',
            'nominator_county' => 'required|string|max:255',
            'nominator_email' => 'required|email|max:255',
            'nominator_contact' => 'required|string|max:255',
            'award_category' => 'required|string|max:255',
            'question_1' => 'required|string|min:100',
            'question_2' => 'required|string|min:100',
            'question_3' => 'required|string|min:100',
            'question_4' => 'required|string|min:100',
            'terms_accepted' => 'required|accepted',
        ], [
            'nominee_first_name.required' => 'Nominee first name is required.',
            'nominee_last_name.required' => 'Nominee last name is required.',
            'nominee_email.required' => 'Nominee email is required.',
            'nominee_email.email' => 'Please provide a valid email address for the nominee.',
            'nominator_name.required' => 'Your first name is required.',
            'nominator_surname.required' => 'Your surname is required.',
            'nominator_email.required' => 'Your email is required.',
            'nominator_email.email' => 'Please provide a valid email address.',
            'award_category.required' => 'Please select an award category.',
            'question_1.required' => 'Question 1 response is required.',
            'question_1.min' => 'Question 1 response must be at least 100 characters.',
            'question_2.required' => 'Question 2 response is required.',
            'question_2.min' => 'Question 2 response must be at least 100 characters.',
            'question_3.required' => 'Question 3 response is required.',
            'question_3.min' => 'Question 3 response must be at least 100 characters.',
            'question_4.required' => 'Question 4 response is required.',
            'question_4.min' => 'Question 4 response must be at least 100 characters.',
            'terms_accepted.accepted' => 'You must accept the terms and conditions to submit.',
        ]);

        try {
            $nomination = Nomination::create($validated);
            
            \Log::info('Nomination created successfully', [
                'nomination_id' => $nomination->id,
                'nominee_email' => $nomination->nominee_email,
                'nominator_email' => $nomination->nominator_email,
            ]);

            return redirect()->route('nominations')->with('success', 'Thank you for your nomination! Your submission has been received and will be reviewed by our panel.');
        } catch (\Exception $e) {
            \Log::error('Failed to create nomination', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'An error occurred while submitting your nomination. Please try again.']);
        }
    }
}
