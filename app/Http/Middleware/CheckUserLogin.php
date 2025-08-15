<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $userId = $request->session()->get('user_id');
    \Log::info('CheckUserLogin Middleware - user_id in session: ' . $userId);

    if (!$userId) {
        return redirect('/User/login')->with('error', 'Please login first.');
    }

    return $next($request);
    }
}
