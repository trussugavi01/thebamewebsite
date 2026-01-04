<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeakersController extends Controller
{
    public function index()
    {
        $speakers = [
            [
                'name' => 'Dr. Sarah Williams',
                'title' => 'Chief Medical Officer, NHS Trust',
                'bio' => 'Leading healthcare transformation with over 20 years of experience in clinical excellence and health equity.',
                'image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop',
                'topic' => 'The Future of Inclusive Healthcare'
            ],
            [
                'name' => 'Professor Michael Okonkwo',
                'title' => 'Director of Health Equity Research',
                'bio' => 'Renowned researcher and advocate for diversity in healthcare leadership and policy.',
                'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop',
                'topic' => 'Breaking Barriers: Advancing B.A.M.E Leadership'
            ],
            [
                'name' => 'Amina Patel',
                'title' => 'CEO, Community Health Alliance',
                'bio' => 'Pioneering community-centered healthcare models that prioritize equity and accessibility.',
                'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&h=400&fit=crop',
                'topic' => 'Community-Led Healthcare Innovation'
            ],
            [
                'name' => 'Dr. James Chen',
                'title' => 'Head of Digital Health Innovation',
                'bio' => 'Expert in leveraging technology to improve healthcare outcomes and reduce disparities.',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop',
                'topic' => 'Digital Solutions for Health Equity'
            ],
            [
                'name' => 'Fatima Hassan',
                'title' => 'Director of Nursing Excellence',
                'bio' => 'Champion of nursing leadership and advocate for diversity in clinical practice.',
                'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop',
                'topic' => 'Empowering Nurses as Change Agents'
            ],
            [
                'name' => 'Marcus Thompson',
                'title' => 'Mental Health Advocate & Consultant',
                'bio' => 'Dedicated to improving mental health services and reducing stigma in diverse communities.',
                'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=400&fit=crop',
                'topic' => 'Mental Health Equity in Action'
            ]
        ];

        return view('pages.summit.speakers', compact('speakers'));
    }
}
