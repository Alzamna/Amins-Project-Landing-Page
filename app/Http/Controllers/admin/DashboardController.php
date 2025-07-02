<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        // Debug: pastikan method ini dipanggil
        // dd('Dashboard controller accessed');
        
        $stats = [
            'total_users' => User::count(),
            'total_products' => Product::count() ?? 0,
            'total_categories' => Category::count() ?? 0,
            'recent_users' => User::latest()->take(5)->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}