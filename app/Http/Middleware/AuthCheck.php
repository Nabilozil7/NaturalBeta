<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    public function handle(Request $request, Closure $next)
    {
        // cek session login manual
        if (!session()->has('user_id')) {
            return redirect('/admin/login');
        }

        return $next($request);
    }
}