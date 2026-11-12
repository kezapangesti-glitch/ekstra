<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\Siswa;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Dashboard admin utama
    public function index()
    {
        $totalEkstra = Ekstrakurikuler::count();

        $totalPendaftar = Siswa::count();

        $ringkasanPendaftaran = Ekstrakurikuler::withCount('pendaftarans')
            ->get();

        return view('home', compact(
            'totalEkstra',
            'totalPendaftar',
            'ringkasanPendaftaran'
        ));
    }

    // Dashboard admin ekstrakurikuler
    public function dashboardEkstra()
    {
        $idEkstra = Auth::user()->ekstrakurikuler_id;

        $ekstra = Ekstrakurikuler::findOrFail($idEkstra);

        $totalPendaftar = Pendaftaran::where('eskul_id', $idEkstra)->count();

        $pendaftarans = Pendaftaran::with('siswa')
            ->where('eskul_id', $idEkstra)
            ->get();

        return view('pages.admin_ekstra.dashboard', compact(
            'ekstra',
            'totalPendaftar',
            'pendaftarans'
        ));
    }
}
