<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\Siswa;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        // Total ekstrakurikuler
        $totalEkstra = Ekstrakurikuler::count();

        // Total siswa / pendaftar
        $totalPendaftar = Siswa::count();

        // Pendaftar hari ini
        $pendaftarHariIni = Siswa::whereDate(
            'created_at',
            Carbon::today()
        )->count();

        // Statistik pendaftar per bulan
        $statistikPendaftar = [];

        for ($bulan = 1; $bulan <= 12; $bulan++) {
            $statistikPendaftar[] = Siswa::whereYear(
                'created_at',
                Carbon::now()->year
            )
            ->whereMonth('created_at', $bulan)
            ->count();
        }

        return view('home', compact(
            'totalEkstra',
            'totalPendaftar',
            'pendaftarHariIni',
            'statistikPendaftar'
        ));
    }
}