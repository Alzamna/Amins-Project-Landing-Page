<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest('created_at')->paginate(10);
        return view('admin.blog-posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = [
            'Technology',
            'Hardware', 
            'Tips',
            'Security',
            'AI',
            'Software'
        ];
        
        return view('admin.blog-posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'category' => 'required|string',
            'author' => 'required|string|max:100',
            'reading_time' => 'required|integer|min:1|max:60',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')
                ->store('blog-images', 'public');
        }

        // Generate slug
        $validated['slug'] = Str::slug($validated['title']);
        
        // Set published_at if publishing
        if ($validated['is_published'] ?? false) {
            $validated['published_at'] = now();
        }

        BlogPost::create($validated);

        return redirect()->route('admin.blog-posts.index')
            ->with('success', 'Blog post created successfully!');
    }

    public function show(BlogPost $blogPost)
    {
        return view('admin.blog-posts.show', compact('blogPost'));
    }

    public function edit(BlogPost $blogPost)
    {
        $categories = [
            'Technology',
            'Hardware',
            'Tips', 
            'Security',
            'AI',
            'Software'
        ];
        
        return view('admin.blog-posts.edit', compact('blogPost', 'categories'));
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'category' => 'required|string',
            'author' => 'required|string|max:100',
            'reading_time' => 'required|integer|min:1|max:60',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image
            if ($blogPost->featured_image) {
                Storage::disk('public')->delete($blogPost->featured_image);
            }
            
            $validated['featured_image'] = $request->file('featured_image')
                ->store('blog-images', 'public');
        }

        // Update slug if title changed
        if ($validated['title'] !== $blogPost->title) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // Set published_at if publishing for first time
        if (($validated['is_published'] ?? false) && !$blogPost->published_at) {
            $validated['published_at'] = now();
        }

        $blogPost->update($validated);

        return redirect()->route('admin.blog-posts.index')
            ->with('success', 'Blog post updated successfully!');
    }

    public function destroy(BlogPost $blogPost)
    {
        // Delete featured image
        if ($blogPost->featured_image) {
            Storage::disk('public')->delete($blogPost->featured_image);
        }

        $blogPost->delete();

        return redirect()->route('admin.blog-posts.index')
            ->with('success', 'Blog post deleted successfully!');
    }
}
