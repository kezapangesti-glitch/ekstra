<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Menampilkan semua ekstrakurikuler.
     */
    public function index()
    {
        $ekstras = Ekstrakurikuler::all();

        return view('pages.admin.index', compact('ekstras'));
    }

    /**
     * Form tambah ekstrakurikuler.
     */
    public function create()
    {
        return view('pages.admin.create');
    }

    /**
     * Menyimpan ekstrakurikuler baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:64',
            'pembina' => 'required|string|max:128',
            'jadwal' => 'required|string|max:64',
            'deskripsi' => 'required|string',
        ]);

        Ekstrakurikuler::create([
            'name' => $request->name,
            'pembina' => $request->pembina,
            'jadwal' => $request->jadwal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('admin.admin.index')
            ->with('success', 'Berhasil menambahkan ekstrakurikuler');
    }

    /**
     * Menampilkan detail ekstrakurikuler.
     */
    public function show(string $id)
    {
        $ekstra = Ekstrakurikuler::findOrFail(decrypt($id));

        return view('pages.admin.show', compact('ekstra'));
    }

    /**
     * Form edit ekstrakurikuler.
     */
    public function edit(string $id)
    {
        $ekstra = Ekstrakurikuler::findOrFail(decrypt($id));

        return view('pages.admin.edit', compact('ekstra'));
    }

    /**
     * Memperbarui ekstrakurikuler.
     */
    public function update(Request $request, string $id)
    {
        $ekstra = Ekstrakurikuler::findOrFail(decrypt($id));

        $request->validate([
            'name' => 'required|string|max:64',
            'pembina' => 'required|string|max:128',
            'jadwal' => 'required|string|max:64',
            'deskripsi' => 'required|string',
        ]);

        $ekstra->update([
            'name' => $request->name,
            'pembina' => $request->pembina,
            'jadwal' => $request->jadwal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('admin.admin.index')
            ->with('success', 'Berhasil memperbarui ekstrakurikuler');
    }

    /**
     * Menghapus ekstrakurikuler.
     */
    public function destroy(string $id)
    {
        $ekstra = Ekstrakurikuler::findOrFail(decrypt($id));

        $ekstra->delete();

        return redirect()
            ->route('admin.admin.index')
            ->with('success', 'Berhasil menghapus ekstrakurikuler');
    }
}