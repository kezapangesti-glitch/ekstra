@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Dashboard
</h1>

<!-- Statistik Utama -->
<div class="row">

    <!-- Total Ekstrakurikuler -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">

                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Ekstrakurikuler
                        </div>

                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $totalEkstra }}
                        </div>

                        <div class="mt-2 text-muted">
                            Ekstrakurikuler tersedia
                        </div>
                    </div>

                    <div class="col-auto">
                        <i class="fas fa-school fa-2x text-gray-300"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Total Pendaftar -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">

                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Pendaftar
                        </div>

                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $totalPendaftar }}
                        </div>

                        <div class="mt-2 text-muted">
                            Siswa telah mendaftar
                        </div>
                    </div>

                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>


<!-- Ringkasan Pendaftaran -->
<div class="row">

    <div class="col-xl-8 col-lg-7">

        <div class="card shadow mb-4">

            <!-- Header -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Ringkasan Pendaftaran
                </h6>
            </div>

            <!-- Isi -->
            <div class="card-body">

                <!-- Judul Kolom -->
                <div class="row font-weight-bold text-gray-800 mb-3">

                    <div class="col-md-4">
                        Ekstrakurikuler
                    </div>

                    <div class="col-md-6">
                        Progress
                    </div>

                    <div class="col-md-2 text-right">
                        Jumlah
                    </div>

                </div>


                @forelse($ringkasanPendaftaran as $ekstra)

                    @php
                        /*
                         * Jumlah pendaftar diambil dari hasil
                         * withCount() berdasarkan eskul_id.
                         */
                        $jumlahPendaftar = $ekstra->pendaftarans_count ?? 0;

                        /*
                         * Nama ekstrakurikuler digunakan untuk
                         * menentukan warna progress bar.
                         */
                        $nama = strtolower(trim($ekstra->name));

                        $warna = match ($nama) {
                            'pramuka' => 'success',
                            'paskibra' => 'danger',
                            'tari' => 'warning',
                            'pmr' => 'info',
                            'futsal' => 'primary',
                            default => 'secondary',
                        };

                        /*
                         * Persentase berdasarkan total seluruh
                         * pendaftar.
                         */
                        $persentase = $totalPendaftar > 0
                            ? ($jumlahPendaftar / $totalPendaftar) * 100
                            : 0;
                    @endphp


                    <!-- Baris Ekstrakurikuler -->
                    <div class="row align-items-center mb-4">

                        <!-- Nama Ekstrakurikuler -->
                        <div class="col-md-4">

                            <div class="font-weight-bold text-{{ $warna }}">
                                {{ $ekstra->name }}
                            </div>

                            @if($jumlahPendaftar > 0)

                                <small class="text-{{ $warna }}">
                                    <i class="fas fa-check-circle"></i>
                                    {{ $jumlahPendaftar }} pendaftar
                                </small>

                            @else

                                <small class="text-muted">
                                    Belum ada pendaftar
                                </small>

                            @endif

                        </div>


                        <!-- Progress Bar -->
                        <div class="col-md-6">

                            <div class="progress" style="height: 10px;">

                                <div
                                    class="progress-bar bg-{{ $warna }}"
                                    role="progressbar"
                                    style="width: {{ $persentase }}%;"
                                    aria-valuenow="{{ $jumlahPendaftar }}"
                                    aria-valuemin="0"
                                    aria-valuemax="{{ $totalPendaftar }}">
                                </div>

                            </div>

                        </div>


                        <!-- Jumlah Pendaftar -->
                        <div class="col-md-2 text-right">

                            <span class="font-weight-bold text-{{ $warna }}">
                                {{ $jumlahPendaftar }}
                            </span>

                        </div>

                    </div>

                @empty

                    <div class="text-center text-muted py-4">
                        Belum ada data ekstrakurikuler.
                    </div>

                @endforelse


                <hr>


                <!-- Total -->
                <div class="row font-weight-bold">

                    <div class="col-md-10">
                        Total
                    </div>

                    <div class="col-md-2 text-right">
                        {{ $totalPendaftar }}
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Informasi -->
    <div class="col-xl-4 col-lg-5">

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Informasi
                </h6>
            </div>

            <div class="card-body">

                <div class="mb-3">

                    <div class="font-weight-bold text-gray-800">
                        Ekstrakurikuler
                    </div>

                    <div class="text-muted">
                        {{ $totalEkstra }} ekstrakurikuler tersedia
                    </div>

                </div>


                <hr>


                <div>

                    <div class="font-weight-bold text-gray-800">
                        Pendaftar
                    </div>

                    <div class="text-muted">
                        {{ $totalPendaftar }} siswa telah mendaftar
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
