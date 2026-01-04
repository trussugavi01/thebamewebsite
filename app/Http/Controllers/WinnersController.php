<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WinnersController extends Controller
{
    public function index()
    {
        $winners = [
            [
                'year' => '2024',
                'name' => 'Dr. Amara Johnson',
                'category' => 'Outstanding Healthcare Professional',
                'organization' => 'Royal London Hospital',
                'achievement' => 'Led groundbreaking research in cardiovascular care, improving patient outcomes by 40%.'
            ],
            [
                'year' => '2024',
                'name' => 'Priya Patel',
                'category' => 'Excellence in Social Care',
                'organization' => 'Community Care Services',
                'achievement' => 'Developed innovative care programs that transformed support for elderly residents.'
            ],
            [
                'year' => '2023',
                'name' => 'Marcus Thompson',
                'category' => 'Rising Star Award',
                'organization' => 'NHS Birmingham',
                'achievement' => 'Implemented digital health solutions that improved accessibility for underserved communities.'
            ],
            [
                'year' => '2023',
                'name' => 'Dr. Fatima Hassan',
                'category' => 'Leadership & Management',
                'organization' => 'Manchester University Hospital',
                'achievement' => 'Transformed department culture and achieved record patient satisfaction scores.'
            ],
            [
                'year' => '2022',
                'name' => 'James Chen',
                'category' => 'Innovation in Healthcare',
                'organization' => 'Oxford Health Trust',
                'achievement' => 'Created AI-powered diagnostic tools that reduced waiting times by 60%.'
            ],
            [
                'year' => '2022',
                'name' => 'Aisha Mohammed',
                'category' => 'Community Impact Award',
                'organization' => 'Leeds Community Health',
                'achievement' => 'Established health outreach programs serving over 10,000 community members.'
            ]
        ];

        return view('pages.awards.winners', compact('winners'));
    }
}
