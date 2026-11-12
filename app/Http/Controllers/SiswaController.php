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

        $siswa = Siswa::where('user_id', Auth::id())->first();

        // Cek pendaftaran ganda
        if ($siswa) {
            $sudahTerdaftar = Pendaftaran::where('siswa_id', $siswa->id)
                ->where('eskul_id', $request->eskul_id)
                ->exists();

            if ($sudahTerdaftar) {
                $ekstra = Ekstrakurikuler::find($request->eskul_id);

                return back()
                    ->with('error', 'Kamu sudah terdaftar pada ekstrakurikuler ' . $ekstra->name . '.')
                    ->withInput();
            }
        }

        // Simpan data siswa
        $siswa = Siswa::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'name' => $request->name,
                'telp' => $request->telp,
                'kelas' => $request->kelas,
            ]
        );

        // Simpan pendaftaran
        Pendaftaran::create([
            'siswa_id' => $siswa->id,
            'eskul_id' => $request->eskul_id,
            'alasan_mengikuti' => $request->alasan_mengikuti,
        ]);

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Pendaftaran berhasil! Terima kasih telah mendaftar ekstrakurikuler.');
    }

    public function show(string $id)
    {
        $ekstra = Ekstrakurikuler::findOrFail($id);

        return view('pages.siswa.show', compact('ekstra'));
    }
}
