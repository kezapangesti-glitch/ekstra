<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SiswaMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->guest(route('login.siswa'));
        }

        if (Auth::user()->role !== 'siswa') {
            abort(403, 'Halaman ini hanya untuk siswa.');
        }

        return $next($request);
    }
}
