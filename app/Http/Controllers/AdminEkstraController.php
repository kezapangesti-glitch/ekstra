<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class AdminEkstraController extends Controller
{
    public function index()
    {
        $admins = User::where('role', 'admin_ekstra')
            ->with('ekstrakurikuler')
            ->get();

        return view('pages.admin_ekstra.index', compact('admins'));
    }

    public function create()
    {
        $ekstras = Ekstrakurikuler::all();

        return view('pages.admin_ekstra.create', compact('ekstras'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'ekstrakurikuler_id' => 'required|exists:ekstrakurikulers,id',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'admin_ekstra',
            'ekstrakurikuler_id' => $request->ekstrakurikuler_id,
        ]);

        return redirect()->route('admin.akun_admin_ekstra.index')
            ->with('success', 'Akun admin ekstrakurikuler berhasil ditambahkan.');
    }

    public function destroy(string $id)
    {
        $admin = User::where('role', 'admin_ekstra')->findOrFail($id);

        $admin->delete();

        return redirect()->route('admin.akun_admin_ekstra.index')
            ->with('success', 'Akun berhasil dihapus.');
    }
}
