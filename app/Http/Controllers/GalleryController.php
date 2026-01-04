<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\GalleryCategory;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $categorySlug = $request->get('category');
        
        // Get all active categories for the filter
        $categories = GalleryCategory::active()->ordered()->get();
        
        // Build the query for gallery images
        $query = Gallery::active()->with('category');
        
        // Filter by category if specified
        if ($categorySlug && $categorySlug !== 'all') {
            $category = GalleryCategory::where('slug', $categorySlug)->first();
            if ($category) {
                $query->where('gallery_category_id', $category->id);
            }
        }
        
        // Get images ordered
        $images = $query->ordered()->get();
        
        return view('pages.gallery', compact('images', 'categories', 'categorySlug'));
    }
}
