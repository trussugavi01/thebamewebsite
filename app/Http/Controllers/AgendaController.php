<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = [
            [
                'time' => '08:00 - 09:00',
                'title' => 'Registration & Welcome Coffee',
                'description' => 'Network with fellow attendees and collect your conference materials.',
                'type' => 'registration'
            ],
            [
                'time' => '09:00 - 09:30',
                'title' => 'Opening Keynote',
                'speaker' => 'Dr. Sarah Williams',
                'description' => 'The Future of Inclusive Healthcare: Setting the stage for transformative conversations.',
                'type' => 'keynote'
            ],
            [
                'time' => '09:30 - 10:45',
                'title' => 'Panel Discussion: Breaking Barriers',
                'speaker' => 'Professor Michael Okonkwo & Panel',
                'description' => 'Advancing B.A.M.E Leadership in Health and Social Care.',
                'type' => 'panel'
            ],
            [
                'time' => '10:45 - 11:15',
                'title' => 'Networking Break',
                'description' => 'Refreshments and networking opportunities.',
                'type' => 'break'
            ],
            [
                'time' => '11:15 - 12:30',
                'title' => 'Workshops (Choose One)',
                'description' => 'Track A: Digital Health Innovation | Track B: Community-Led Care | Track C: Mental Health Equity',
                'type' => 'workshop'
            ],
            [
                'time' => '12:30 - 13:30',
                'title' => 'Lunch & Networking',
                'description' => 'Enjoy lunch while connecting with speakers and attendees.',
                'type' => 'break'
            ],
            [
                'time' => '13:30 - 14:45',
                'title' => 'Masterclass Sessions',
                'description' => 'Deep-dive sessions on leadership, innovation, and equity in healthcare.',
                'type' => 'workshop'
            ],
            [
                'time' => '14:45 - 15:00',
                'title' => 'Afternoon Break',
                'description' => 'Coffee and refreshments.',
                'type' => 'break'
            ],
            [
                'time' => '15:00 - 16:00',
                'title' => 'Closing Keynote & Awards Ceremony',
                'description' => 'Celebrating excellence and looking forward to the future.',
                'type' => 'keynote'
            ],
            [
                'time' => '16:00 - 17:00',
                'title' => 'Reception & Networking',
                'description' => 'Join us for a closing reception to celebrate and connect.',
                'type' => 'reception'
            ]
        ];

        return view('pages.summit.agenda', compact('agenda'));
    }
}
