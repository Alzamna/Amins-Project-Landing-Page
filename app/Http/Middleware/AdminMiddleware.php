<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Debug: cek authentication
        if (!auth()->check()) {
            // dd('Not authenticated, redirecting to login');
            return redirect()->route('login');
        }

        $user = auth()->user();
        
        // Debug: cek role
        if ($user->role !== 'admin') {
            // dd('Not admin', $user->role, $user);
            abort(403, 'Access denied. Admin privileges required. Your role: ' . $user->role);
        }

        return $next($request);
    }
}