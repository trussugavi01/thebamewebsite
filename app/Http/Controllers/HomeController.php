<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\SiteMetric;
use App\Models\BlogPost;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('is_active', true)
            ->orderBy('order')
            ->take(6)
            ->get();

        $metrics = SiteMetric::where('is_active', true)
            ->orderBy('order')
            ->get();

        $blogPosts = BlogPost::published()
            ->latest()
            ->take(3)
            ->get();

        return view('pages.home', compact('testimonials', 'metrics', 'blogPosts'));
    }
}
