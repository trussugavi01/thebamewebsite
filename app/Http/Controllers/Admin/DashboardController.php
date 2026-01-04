<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nomination;
use App\Models\BlogPost;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'nominations' => [
                'total' => Nomination::count(),
                'pending' => Nomination::where('status', 'pending')->count(),
                'shortlisted' => Nomination::where('status', 'shortlisted')->count(),
                'winners' => Nomination::where('status', 'winner')->count(),
            ],
            'blog' => [
                'total' => BlogPost::count(),
                'published' => BlogPost::where('status', 'published')->count(),
                'draft' => BlogPost::where('status', 'draft')->count(),
            ],
            'gallery' => [
                'total_images' => Gallery::count(),
                'categories' => GalleryCategory::count(),
            ],
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
