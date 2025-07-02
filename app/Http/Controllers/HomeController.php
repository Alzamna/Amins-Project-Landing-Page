<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 6 blog post terbaru untuk ditampilkan di homepage
        $blogPosts = BlogPost::published()
                            ->orderBy('created_at', 'desc')
                            ->take(6)
                            ->get();

        return view('home', compact('blogPosts'));
    }
}
