
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Ekstrakurikuler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

        .page-title {
            color: #224abe;
        }

        .card {
            border-radius: 12px;
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

        .btn-secondary {
            background-color: #858796;
            border-color: #858796;
        }

        footer {
            background-color: #224abe;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('publik.ekstra.index') }}">
            <i class="fas fa-school me-2"></i>
            Ekstrakurikuler Sekolah
        </a>
    </div>
</nav>

<div class="container py-5">

    <h3 class="fw-bold page-title mb-4">Detail Ekstrakurikuler</h3>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">

            <h2 class="fw-bold text-primary mb-4">
                {{ $ekstra->name }}
            </h2>

            <hr>

            <p><strong>Nama Ekstrakurikuler:</strong>
                {{ $ekstra->name }}
            </p>

            <p><strong>Pembina:</strong>
                {{ $ekstra->pembina }}
            </p>

            <p><strong>Jadwal:</strong>
                {{ $ekstra->jadwal }}
            </p>

            <p><strong>Deskripsi:</strong></p>
            <p>{{ $ekstra->deskripsi }}</p>

            <div class="mt-4">
                <a href="{{ route('publik.ekstra.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <a href="{{ route('siswa.create') }}"
                   class="btn btn-primary">
                    Daftar Sekarang
                </a>
            </div>

        </div>
    </div>

</div>

<footer class="text-white text-center py-3 mt-5">
    <p class="mb-0">© 2026 Sistem Informasi Ekstrakurikuler Sekolah</p>
</footer>

</body>
</html>
