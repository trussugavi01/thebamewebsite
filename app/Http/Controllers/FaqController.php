<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $category = $request->get('category', 'all');
        
        $query = Faq::where('is_active', true);
        
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('question', 'ilike', "%{$search}%")
                  ->orWhere('answer', 'ilike', "%{$search}%");
            });
        }
        
        if ($category !== 'all') {
            $query->where('category', $category);
        }
        
        $faqs = $query->orderBy('order')->get()->groupBy('category');
        
        $categories = [
            'all' => 'All',
            'entry' => 'Entry Requirements',
            'nominations' => 'Nominations',
            'judging' => 'Judging Process',
            'events' => 'Events & Tickets',
            'accessibility' => 'Accessibility'
        ];
        
        return view('pages.faq', compact('faqs', 'categories', 'category', 'search'));
    }
}
