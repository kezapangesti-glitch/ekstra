
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ekstrakurikuler Sekolah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f7fc;
        }

        .navbar {
            background-color: #224abe;
        }

        .navbar-brand {
            color: white;
        }

        .btn-login {
            background-color: white;
            color: #224abe;
            border: none;
            font-weight: 600;
        }

        .btn-login:hover {
            background-color: #e8edfa;
            color: #1a3985;
        }

        .page-title {
            color: #224abe;
        }

        .card {
            border-radius: 12px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .text-primary {
            color: #224abe !important;
        }

        .btn-primary {
            background-color: #224abe;
            border-color: #224abe;
        }

        .btn-primary:hover {
            background-color: #1a3985;
            border-color: #1a3985;
        }

        .alert-info {
            background-color: #e8edfa;
            color: #224abe;
            border-color: #cbd6f5;
        }

        footer {
            background-color: #224abe;
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">

            <a class="navbar-brand fw-bold" href="{{ route('publik.ekstra.index') }}">
                <i class="fas fa-school me-2"></i>
                Ekstrakurikuler Sekolah
            </a>

            @if (Auth::check() && Auth::user()->role == 'siswa')

                <form action="{{ route('siswa.logout') }}" method="POST">
                    @csrf

                    <button type="submit" class="btn btn-login btn-sm">
                        <i class="fas fa-sign-out-alt me-1"></i>
                        Logout
                    </button>
                </form>

            @else

                <a href="{{ route('login.siswa') }}" class="btn btn-login btn-sm">
                    Login Siswa
                </a>

            @endif

        </div>
    </nav>

    {{-- DAFTAR EKSTRAKURIKULER --}}
    <div class="container py-5">

        <div class="text-center mb-5">
            <h2 class="fw-bold page-title">Daftar Ekstrakurikuler</h2>
            <p class="text-muted">
                Temukan kegiatan ekstrakurikuler yang sesuai dengan minat dan bakatmu.
            </p>
        </div>

        <div class="row">

            @forelse ($ekstras as $ekstra)

                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100 border-0">

                        <div class="card-body p-4">

                            <h5 class="fw-bold text-primary mb-3">
                                {{ $ekstra->name }}
                            </h5>

                            <p>
                                <strong>Pembina:</strong> {{ $ekstra->pembina }}
                            </p>

                            <p>
                                <strong>Jadwal:</strong> {{ $ekstra->jadwal }}
                            </p>

                            <a href="{{ route('publik.ekstra.show', $ekstra->id) }}"
                                class="btn btn-primary w-100 mt-2">
                                Lihat Detail
                            </a>

                        </div>
                    </div>
                </div>

            @empty

                <div class="col-12 text-center">
                    <div class="alert alert-info">
                        Belum ada ekstrakurikuler tersedia.
                    </div>
                </div>

            @endforelse

        </div>
    </div>

    {{-- FOOTER --}}
    <footer class="text-white text-center py-3 mt-4">
        <p class="mb-0">© 2026 Sistem Informasi Ekstrakurikuler Sekolah</p>
    </footer>

</body>
</html>
