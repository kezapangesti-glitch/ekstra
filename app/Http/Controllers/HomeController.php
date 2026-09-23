<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\Siswa;

class HomeController extends Controller
{
    public function index()
    {
        // Total ekstrakurikuler
        $totalEkstra = Ekstrakurikuler::count();

        // Total siswa yang terdaftar
        $totalPendaftar = Siswa::count();

        // Ringkasan pendaftaran berdasarkan ekstrakurikuler
        $ringkasanPendaftaran = Ekstrakurikuler::withCount('pendaftarans')
            ->get();

        return view('home', compact(
            'totalEkstra',
            'totalPendaftar',
            'ringkasanPendaftaran'
        ));
    }
}