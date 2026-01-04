<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = [
            [
                'title' => 'Outstanding Healthcare Professional',
                'description' => 'Recognizing exceptional clinical care and patient outcomes delivered by B.A.M.E healthcare professionals.',
                'icon' => 'medical'
            ],
            [
                'title' => 'Excellence in Social Care',
                'description' => 'Celebrating those who provide outstanding support and care in social care settings.',
                'icon' => 'care'
            ],
            [
                'title' => 'Rising Star Award',
                'description' => 'Honoring emerging talent and future leaders in health and social care.',
                'icon' => 'star'
            ],
            [
                'title' => 'Leadership & Management',
                'description' => 'Recognizing exceptional leadership that drives positive change and innovation.',
                'icon' => 'leadership'
            ],
            [
                'title' => 'Innovation in Healthcare',
                'description' => 'Celebrating groundbreaking initiatives and innovative approaches to care delivery.',
                'icon' => 'innovation'
            ],
            [
                'title' => 'Community Impact Award',
                'description' => 'Honoring those making significant contributions to community health and wellbeing.',
                'icon' => 'community'
            ],
            [
                'title' => 'Mental Health Champion',
                'description' => 'Recognizing excellence in mental health support and advocacy.',
                'icon' => 'mental-health'
            ],
            [
                'title' => 'Lifetime Achievement',
                'description' => 'Celebrating sustained excellence and outstanding contributions throughout a career.',
                'icon' => 'achievement'
            ]
        ];

        return view('pages.awards.categories', compact('categories'));
    }
}
