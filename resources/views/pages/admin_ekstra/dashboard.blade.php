
@extends('layouts.app')

@section('title', 'Dashboard Admin Ekstra')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Dashboard {{ $ekstra->name }}
</h1>

<!-- Informasi Ekstrakurikuler -->
<div class="row">

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Nama Ekstrakurikuler
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                    {{ $ekstra->name }}
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Total Pendaftar
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                    {{ $totalPendaftar }}
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Detail Ekstrakurikuler -->
<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Informasi Ekstrakurikuler
        </h6>
    </div>

    <div class="card-body">
        <p>
            <strong>Pembina:</strong>
            {{ $ekstra->pembina }}
        </p>

        <p class="mb-0">
            <strong>Jadwal:</strong>
            {{ $ekstra->jadwal }}
        </p>
    </div>

</div>

<!-- Data Pendaftar -->
<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Data Pendaftar
        </h6>
    </div>

    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($pendaftarans as $pendaftaran)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pendaftaran->siswa->name ?? '-' }}</td>
                            <td>{{ $pendaftaran->siswa->kelas ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">
                                Belum ada siswa yang mendaftar.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

</div>

@endsection
