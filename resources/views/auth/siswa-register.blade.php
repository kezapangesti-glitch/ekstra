<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Siswa - EkstraKu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        .btn-register {
            background: #1f3a5f;
            color: white;
            border: none;
        }

        .btn-register:hover {
            background: #162c48;
            color: white;
        }
    </style>
</head>

<body style="background: #1f4169;">

    <div class="container">

        <div class="row justify-content-center align-items-center"
            style="min-height: 100vh;">

            <div class="col-md-5">

                <div class="card border-0 shadow p-4">

                    <div class="card-body">

                        <h2 class="text-center mb-2">
                            Daftar Akun Siswa
                        </h2>

                        <p class="text-center text-muted mb-4">
                            Buat akun untuk mendaftar ekstrakurikuler
                        </p>

                        {{-- Error --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Success --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('siswa.register.store') }}" method="POST">

                            @csrf

                            {{-- Nama --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Nama Lengkap
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    value="{{ old('name') }}"
                                    placeholder="Masukkan nama lengkap"
                                    required>
                            </div>

                            {{-- Email --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    value="{{ old('email') }}"
                                    placeholder="Masukkan email"
                                    required>
                            </div>

                            {{-- Password --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Password
                                </label>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Minimal 8 karakter"
                                    required>
                            </div>

                            {{-- Konfirmasi Password --}}
                            <div class="mb-3">
                                <label class="form-label">
                                    Konfirmasi Password
                                </label>

                                <input
                                    type="password"
                                    name="password_confirmation"
                                    class="form-control"
                                    placeholder="Ulangi password"
                                    required>
                            </div>

                            <button
                                type="submit"
                                class="btn btn-register w-100">
                                Daftar
                            </button>

                        </form>

                        <div class="text-center mt-4">

                            <span class="text-muted">
                                Sudah punya akun?
                            </span>

                            <a href="{{ route('login.siswa') }}">
                                Login disini
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>