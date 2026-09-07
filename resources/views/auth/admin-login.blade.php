<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body style="background: #1f4169;">

    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">

            <div class="col-md-5">

                <div class="card shadow">
                    <div class="card-body p-4">

                        <h3 class="text-center mb-4">
                            Login Admin
                        </h3>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif

                        <form action="{{ route('login') }}" method="POST">

                            @csrf

                            <div class="mb-3">
                                <label class="form-label">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    value="{{ old('email') }}"
                                    required
                                >
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Password
                                </label>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    required
                                >
                            </div>

                            <button
                                type="submit"
                                class="btn w-100 text-white"
                                style="background: #1f3a5f;"
                            >
                                Login Admin
                            </button>

                        </form>

                        <div class="text-center mt-3">
                            <a href="{{ route('login.siswa') }}">
                                Login sebagai Siswa
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

</body>
</html>