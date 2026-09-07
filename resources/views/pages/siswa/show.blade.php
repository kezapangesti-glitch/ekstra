@extends('layouts.siswa')

@section('title', 'Detail Ekstrakurikuler')

@section('content')
    <div class="w-100 px-2 px-md-4">

        <!-- Tombol Kembali ke Dashboard -->
        <div class="mb-3">
            <a href="{{ route('siswa.index') }}" class="btn btn-link text-decoration-none p-0 text-secondary">
                <i class="fas fa-arrow-left mr-1"></i> Kembali ke Dashboard
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-primary">{{ $ekstra->name }}</h5>
                    </div>
                    <div class="card-body">

                        <div class="mb-4">
                            <div class="row mb-2">
                                <div class="col-sm-3 font-weight-bold text-dark">Pembina</div>
                                <div class="col-sm-9 text-muted">: {{ $ekstra->pembina }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3 font-weight-bold text-dark">Jadwal</div>
                                <div class="col-sm-9 text-muted">: {{ $ekstra->jadwal }}</div>
                            </div>
                        </div>

                        <hr>

                        <div class="mb-4">
                            <h6 class="font-weight-bold text-dark mb-2">Deskripsi</h6>
                            <p class="text-muted" style="line-height: 1.6;">
                                {{ $ekstra->deskripsi }}
                            </p>
                        </div>

                        <a href="{{ route('siswa.create', ['ekstra_id' => $ekstra->id]) }}"
                            class="btn btn-primary btn-block font-weight-bold py-2 shadow-sm">
                            Daftar Sekarang
                        </a>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection