
@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Tambah Admin Ekstrakurikuler</h1>

    <div class="card shadow">
        <div class="card-body">

            <form action="{{ route('admin.akun_admin_ekstra.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Nama Admin</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Ekstrakurikuler</label>
                    <select name="ekstrakurikuler_id" class="form-control" required>
                        <option value="">Pilih Ekstrakurikuler</option>
                        @foreach($ekstras as $ekstra)
                            <option value="{{ $ekstra->id }}">
                                {{ $ekstra->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>

                <a href="{{ route('admin.akun_admin_ekstra.index') }}"
                   class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>
@endsection
