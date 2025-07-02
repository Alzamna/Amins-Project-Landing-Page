<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::published()->latest()->get();
        $categories = Portfolio::published()->distinct()->pluck('category');
        
        return view('portfolio', compact('portfolios', 'categories'));
    }

    public function show(Portfolio $portfolio)
    {
        if ($portfolio->status !== 'published') {
            abort(404);
        }

        return view('portfolio.show', compact('portfolio'));
    }
}
