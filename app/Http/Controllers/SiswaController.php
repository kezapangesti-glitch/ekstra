<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Ekstrakurikuler;
use App\Models\Siswa;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $ekstras = Ekstrakurikuler::all();

        return view('pages.siswa.index', compact('ekstras'));
    }

    public function create(Request $request)
    {
        $ekstras = Ekstrakurikuler::all();

        $selectedEkstraId = $request->query('ekstra_id');

        return view(
            'pages.siswa.create',
            compact('ekstras', 'selectedEkstraId')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'telp' => 'required',
            'kelas' => 'required',
            'eskul_id' => 'required|exists:ekstrakurikulers,id',
            'alasan_mengikuti' => 'required',
        ]);

        // Cari data siswa berdasarkan akun yang sedang login
        $siswa = Siswa::where('user_id', Auth::id())->first();

        // Cek apakah siswa sudah pernah mendaftar ekstrakurikuler yang sama
        if ($siswa) {

            $sudahTerdaftar = Pendaftaran::where('siswa_id', $siswa->id)
                ->where('eskul_id', $request->eskul_id)
                ->exists();

            if ($sudahTerdaftar) {

                $ekstra = Ekstrakurikuler::find($request->eskul_id);

                return back()->with('error','Kamu sudah terdaftar pada ekstrakurikuler ' . $ekstra->name . '.')->withInput();
            }
        }

        // Simpan atau perbarui data siswa
        $siswa = Siswa::updateOrCreate(
            [
                'user_id' => Auth::id()
            ],
            [
                'name' => $request->name,
                'telp' => $request->telp,
                'kelas' => $request->kelas,
            ]
        );

        // Simpan data pendaftaran
        Pendaftaran::create([
            'siswa_id' => $siswa->id,
            'eskul_id' => $request->eskul_id,
            'alasan_mengikuti' => $request->alasan_mengikuti,
        ]);

        return redirect()
            ->route('siswa.index')
            ->with(
                'success',
                'Pendaftaran berhasil! Terima kasih telah mendaftar ekstrakurikuler.'
            );
    }

    public function show(string $id)
    {
        $ekstra = Ekstrakurikuler::findOrFail($id);

        return view('pages.siswa.show', compact('ekstra'));
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