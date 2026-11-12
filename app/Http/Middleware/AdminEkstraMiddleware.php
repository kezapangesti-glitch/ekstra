<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminEkstraMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check() || Auth::user()->role !== 'admin_ekstra') {
            abort(403, 'Halaman ini hanya untuk admin ekstrakurikuler.');
        }

        if (!Auth::user()->ekstrakurikuler_id) {
            abort(403, 'Akun belum memiliki ekstrakurikuler.');
        }

        return $next($request);
    }
}
