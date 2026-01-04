<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    public function index()
    {
        $sponsors = [
            [
                'tier' => 'Platinum',
                'name' => 'NHS England',
                'logo' => 'https://via.placeholder.com/200x100/4F46E5/FFFFFF?text=NHS+England',
                'description' => 'Supporting excellence in healthcare across the nation.'
            ],
            [
                'tier' => 'Platinum',
                'name' => 'Health Education England',
                'logo' => 'https://via.placeholder.com/200x100/7C3AED/FFFFFF?text=HEE',
                'description' => 'Investing in the future of healthcare professionals.'
            ],
            [
                'tier' => 'Gold',
                'name' => 'Royal College of Nursing',
                'logo' => 'https://via.placeholder.com/200x100/2563EB/FFFFFF?text=RCN',
                'description' => 'Championing nursing excellence and professional development.'
            ],
            [
                'tier' => 'Gold',
                'name' => 'British Medical Association',
                'logo' => 'https://via.placeholder.com/200x100/0891B2/FFFFFF?text=BMA',
                'description' => 'Supporting doctors and advancing healthcare.'
            ],
            [
                'tier' => 'Silver',
                'name' => 'Care Quality Commission',
                'logo' => 'https://via.placeholder.com/200x100/059669/FFFFFF?text=CQC',
                'description' => 'Ensuring quality care across health and social care services.'
            ],
            [
                'tier' => 'Silver',
                'name' => 'Skills for Care',
                'logo' => 'https://via.placeholder.com/200x100/DC2626/FFFFFF?text=Skills+for+Care',
                'description' => 'Developing the adult social care workforce.'
            ]
        ];

        return view('pages.sponsors', compact('sponsors'));
    }
}
