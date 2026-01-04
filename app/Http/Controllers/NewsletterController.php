<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscription;

class NewsletterController extends Controller
{
    public function index()
    {
        return view('pages.newsletter');
    }

    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:newsletter_subscriptions,email',
            'awards_news' => 'boolean',
            'summit_updates' => 'boolean',
            'partner_opportunities' => 'boolean'
        ]);

        $validated['awards_news'] = $request->has('awards_news');
        $validated['summit_updates'] = $request->has('summit_updates');
        $validated['partner_opportunities'] = $request->has('partner_opportunities');

        NewsletterSubscription::create($validated);

        return redirect()->route('newsletter')->with('success', 'Thank you for subscribing! You will receive updates based on your preferences.');
    }
}
