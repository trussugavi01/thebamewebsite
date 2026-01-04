<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::published()
            ->latest()
            ->paginate(9);

        return view('pages.blog.index', compact('posts'));
    }

    public function show(BlogPost $blogPost)
    {
        if ($blogPost->status !== 'published') {
            abort(404);
        }

        $blogPost->incrementViews();

        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $blogPost->id)
            ->latest()
            ->take(3)
            ->get();

        return view('pages.blog.show', compact('blogPost', 'relatedPosts'));
    }
}
