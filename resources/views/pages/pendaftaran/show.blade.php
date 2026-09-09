@extends('layouts.app')

@section('title', 'Detail Pendaftaran')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Pendaftaran</h1>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex align-items-center justify-content-between">
                <a href="{{ route('admin.pendaftaran.index') }}" class="btn btn-sm btn-secondary">
                    <i class="fa fa-arrow-left mr-1"></i> Kembali
                </a>
            </div>

            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>Nama Siswa</th>
                        <td>: {{ $pendaftaran->siswa->name }}</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>: {{ $pendaftaran->siswa->kelas }}</td>
                    </tr>
                    <tr>
                        <th>No. Telepon</th>
                        <td>: {{ $pendaftaran->siswa->telp }}</td>
                    </tr>
                    <tr>
                        <th>Ekstrakurikuler</th>
                        <td>: {{ $pendaftaran->ekstrakurikuler->name }}</td>
                    </tr>
                    <tr>
                        <th>Alasan Mengikuti</th>
                        <td>: {{ $pendaftaran->alasan_mengikuti }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection