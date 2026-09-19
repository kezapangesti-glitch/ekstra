@extends('layouts.app')

@section('content')

    <h1 class="h3 mb-4 text-gray-800">
        Dashboard
    </h1>

    <!-- Statistik -->
    <div class="row">

        <!-- Total Ekstrakurikuler -->
        <div class="col-xl-4 col-md-6 mb-4">
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
                        </div>

                        <div class="col-auto">
                            <i class="fas fa-school fa-2x text-gray-300"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- Total Pendaftar -->
        <div class="col-xl-4 col-md-6 mb-4">
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
                        </div>

                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- Pendaftar Hari Ini -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Pendaftar Hari Ini
                            </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $pendaftarHariIni }}
                            </div>
                        </div>

                        <div class="col-auto">
                            <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Grafik -->
    <div class="row">

        <div class="col-xl-8 col-lg-7">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Statistik Pendaftaran
                    </h6>
                </div>

                <div class="card-body">

                    <canvas id="pendaftarChart"></canvas>

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


@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('pendaftarChart');

    new Chart(ctx, {
        type: 'line',

        data: {
            labels: [
                'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            ],

            datasets: [{
                label: 'Jumlah Pendaftar',

                data: @json($statistikPendaftar),

                borderWidth: 2,

                fill: false,

                tension: 0.3
            }]
        },

        options: {
            responsive: true,

            maintainAspectRatio: true,

            scales: {
                y: {
                    beginAtZero: true,

                    ticks: {
                        precision: 0
                    }
                }
            }
        }
    });
</script>

@endsection