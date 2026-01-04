<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Judge;

class JudgesController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->get('category', 'all');
        
        $query = Judge::where('is_active', true)->orderBy('order');
        
        if ($category !== 'all') {
            $query->where('category', $category);
        }
        
        $judges = $query->get();
        
        $categories = [
            'all' => 'All',
            'public_health' => 'Public Health',
            'workforce' => 'Workforce',
            'research' => 'Research',
            'social_care' => 'Social Care',
            'equity_inclusion' => 'Equity & Inclusion'
        ];
        
        return view('pages.judges', compact('judges', 'categories', 'category'));
    }
}
