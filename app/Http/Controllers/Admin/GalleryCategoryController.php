<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    public function index()
    {
        $categories = GalleryCategory::withCount('galleries')->ordered()->paginate(20);
        return view('admin.gallery.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.gallery.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:gallery_categories,name',
            'slug' => 'nullable|string|max:255|unique:gallery_categories,slug',
            'description' => 'nullable|string',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $validated['order'] ?? 0;

        GalleryCategory::create($validated);

        return redirect()->route('admin.gallery.categories.index')
            ->with('success', 'Category created successfully.');
    }

    public function edit(GalleryCategory $category)
    {
        return view('admin.gallery.categories.edit', compact('category'));
    }

    public function update(Request $request, GalleryCategory $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:gallery_categories,name,' . $category->id,
            'slug' => 'nullable|string|max:255|unique:gallery_categories,slug,' . $category->id,
            'description' => 'nullable|string',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $validated['order'] ?? $category->order;

        $category->update($validated);

        return redirect()->route('admin.gallery.categories.index')
            ->with('success', 'Category updated successfully.');
    }

    public function destroy(GalleryCategory $category)
    {
        $category->delete();

        return redirect()->route('admin.gallery.categories.index')
            ->with('success', 'Category deleted successfully.');
    }
}
