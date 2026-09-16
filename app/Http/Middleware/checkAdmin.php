<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Example logic: Check if user is an admin
        if (!$request->user() || !$request->user()->is_admin) {
            // Reject the request and redirect
            return redirect('home');
        }

        // Pass the request further into the application
        return $next($request);
    }
}
