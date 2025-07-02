<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = BlogPost::published()->latest('published_at');

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->get('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        // Category filter
        if ($request->filled('category') && $request->get('category') !== 'all') {
            $query->byCategory($request->get('category'));
        }

        $posts = $query->paginate(6);
        $featuredPost = BlogPost::published()->featured()->latest('published_at')->first();
        
        // Get available categories
        $categories = BlogPost::published()
            ->select('category')
            ->distinct()
            ->pluck('category')
            ->sort();

        return view('blog', compact('posts', 'featuredPost', 'categories'));
    }

    public function show(BlogPost $blogPost)
    {
        // Only show published posts to public
        if (!$blogPost->is_published) {
            abort(404);
        }

        // Increment views count
        $blogPost->increment('views_count');

        // Get related posts from the same category
        $relatedPosts = BlogPost::published()
            ->byCategory($blogPost->category)
            ->where('id', '!=', $blogPost->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('blog.show', compact('blogPost', 'relatedPosts'));
    }
}
