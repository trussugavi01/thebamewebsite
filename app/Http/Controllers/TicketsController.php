<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        $ticketTypes = [
            [
                'name' => 'Early Bird',
                'price' => '£99',
                'original_price' => '£149',
                'features' => [
                    'Full day access to summit',
                    'All keynote sessions',
                    'Choice of workshop tracks',
                    'Lunch and refreshments',
                    'Conference materials',
                    'Networking reception'
                ],
                'available' => true,
                'badge' => 'Limited Time'
            ],
            [
                'name' => 'Standard',
                'price' => '£149',
                'features' => [
                    'Full day access to summit',
                    'All keynote sessions',
                    'Choice of workshop tracks',
                    'Lunch and refreshments',
                    'Conference materials',
                    'Networking reception'
                ],
                'available' => true,
                'badge' => null
            ],
            [
                'name' => 'VIP',
                'price' => '£249',
                'features' => [
                    'All Standard features',
                    'Priority seating',
                    'VIP networking lounge access',
                    'Meet & greet with speakers',
                    'Exclusive VIP dinner',
                    'Premium gift bag',
                    'Certificate of attendance'
                ],
                'available' => true,
                'badge' => 'Best Value'
            ],
            [
                'name' => 'Group (5+)',
                'price' => '£119',
                'original_price' => '£149',
                'features' => [
                    'All Standard features',
                    'Discounted rate per person',
                    'Group registration support',
                    'Dedicated seating area',
                    'Group photo opportunity'
                ],
                'available' => true,
                'badge' => 'Save 20%'
            ]
        ];

        return view('pages.summit.tickets', compact('ticketTypes'));
    }
}
