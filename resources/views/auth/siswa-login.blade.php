<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa - EkstraKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .btn-login {
            background: #1f3a5f;
            color: white;
            border: none;
        }

        .btn-login:hover {
            background: #162c48;
            color: white;
        }
    </style>
</head>
<body style="background: #1f4169;">

<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-5">
            <div class="card border-0 shadow p-4">
                <div class="card-body">
                    <h2 class="text-center mb-2">Sistem Pendaftaran <br> Ekstrakurikuler Siswa</h2>
                    <p class="text-center text-muted mb-4">Masuk untuk melanjutkan</p>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form action="{{ route('siswa.login') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-login w-100">
                            Login
                        </button>
                    </form>

                    <div class="text-center mt-4">
                        <span class="text-muted">Belum punya akun?</span>
                        <a href="{{ route('siswa.register') }}">Daftar disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>