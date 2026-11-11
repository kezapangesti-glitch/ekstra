<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstraController extends Controller
{
    // HALAMAN PUBLIK SISWA
    public function publicIndex()
    {
        $ekstras = Ekstrakurikuler::all();

        return view('pages.ekstra.public-index', compact('ekstras'));
    }

    // DETAIL EKSTRA UNTUK SISWA
    public function publicShow($id)
    {
        $ekstra = Ekstrakurikuler::findOrFail($id);

        return view('pages.ekstra.public-show', compact('ekstra'));
    }

    // HALAMAN ADMIN
    public function index()
    {
        $ekstras = Ekstrakurikuler::all();

        return view('pages.ekstra.index', compact('ekstras'));
    }

    // FORM TAMBAH EKSTRA
    public function create()
    {
        return view('pages.ekstra.create');
    }

    // SIMPAN DATA EKSTRA
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'pembina' => 'required|string|max:225',
            'jadwal' => 'required|string|max:225',
            'deskripsi' => 'required|string',
        ]);

        Ekstrakurikuler::create([
            'name' => $request->name,
            'pembina' => $request->pembina,
            'jadwal' => $request->jadwal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('admin.ekstra.index')
            ->with('success', 'Berhasil menambahkan data ekstra');
    }

    // DETAIL EKSTRA ADMIN
    public function show(string $id)
    {
        $ekstra = Ekstrakurikuler::findOrFail($id);

        return view('pages.ekstra.show', compact('ekstra'));
    }

    // FORM EDIT EKSTRA
    public function edit(string $id)
    {
        $ekstra = Ekstrakurikuler::findOrFail($id);

        return view('pages.ekstra.edit', compact('ekstra'));
    }

    // UPDATE DATA EKSTRA
    public function update(Request $request, string $id)
    {
        $ekstra = Ekstrakurikuler::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:225',
            'pembina' => 'required|string|max:225',
            'jadwal' => 'required|string|max:225',
            'deskripsi' => 'required|string',
        ]);

        $ekstra->update([
            'name' => $request->name,
            'pembina' => $request->pembina,
            'jadwal' => $request->jadwal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('admin.ekstra.index')
            ->with('success', 'Berhasil memperbarui data ekstra');
    }

    // HAPUS DATA EKSTRA
    public function destroy(string $id)
    {
        $ekstra = Ekstrakurikuler::findOrFail($id);

        $ekstra->delete();

        return redirect()
            ->route('admin.ekstra.index')
            ->with('success', 'Berhasil menghapus data ekstra');
    }
}
