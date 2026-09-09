<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ekstras = Ekstrakurikuler::all();

        return view('pages.ekstra.index', compact('ekstras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.ekstra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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
            ->with('success', 'Berhasil Menambahkan Data ekstra');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ekstra = Ekstrakurikuler::findOrFail($id);

        return view('pages.ekstra.show', compact('ekstra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ekstra = Ekstrakurikuler::findOrFail($id);

        return view('pages.ekstra.edit', compact('ekstra'));
    }

    /**
     * Update the specified resource in storage.
     */
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

        return redirect()->route('admin.ekstra.index')->with('success', 'Berhasil Memperbarui data ekstra');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ekstra = Ekstrakurikuler::findOrFail($id);
        $ekstra->delete();
        return redirect()->route('admin.ekstra.index')->with('success', 'Berhasil menghapus data ekstra');
    }
}