<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Siswa;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function index()
    {
        $query = Pendaftaran::with(['siswa', 'ekstrakurikuler']);

        if (Auth::user()->role == 'admin_ekstra') {
            $query->where('eskul_id', Auth::user()->ekstrakurikuler_id);
        }

        $pendaftarans = $query->get();

        return view('pages.pendaftaran.index', compact('pendaftarans'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        $ekstras = Ekstrakurikuler::all();

        return view('pages.pendaftaran.create', compact('siswas', 'ekstras'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $query = Pendaftaran::with(['siswa', 'ekstrakurikuler']);

        if (Auth::user()->role == 'admin_ekstra') {
            $query->where('eskul_id', Auth::user()->ekstrakurikuler_id);
        }

        $pendaftaran = $query->findOrFail($id);

        return view('pages.pendaftaran.show', compact('pendaftaran'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
