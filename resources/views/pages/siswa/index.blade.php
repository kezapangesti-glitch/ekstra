@extends('layouts.siswa')

@section('title', 'Dashboard Siswa')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 font-weight-bold text-gray-800">
                Selamat datang, {{ Auth::user()->name ?? 'siswa' }}!
            </h1>
            <p class="text-muted mb-0">
                Temukan dan daftar ekstrakurikuler yang kamu minati.
            </p>
        </div>

        {{-- PROFIL SISWA --}}
        <div class="dropdown">
            <a href="#"
                role="button"
                id="dropdownUser"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-user-circle fa-2x text-primary"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-right shadow"
                aria-labelledby="dropdownUser">

                <form action="{{ route('siswa.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Logout
                    </button>
                </form>

            </div>
        </div>
    </div>


    {{-- DAFTAR EKSTRAKURIKULER --}}
    <div class="row justify-content-center">
        <div class="col-lg-12">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Daftar Ekstrakurikuler
                    </h6>

                    <small class="text-muted">
                        Pilih ekstrakurikuler yang tersedia.
                    </small>
                </div>

                <div class="card-body p-0">

                    <div class="list-group list-group-flush">

                        @forelse ($ekstras as $ekstra)

                            <div class="list-group-item d-flex justify-content-between align-items-center p-3">

                                <div>
                                    <h5 class="font-weight-bold text-dark mb-1">
                                        {{ $ekstra->name }}
                                    </h5>

                                    <div class="text-secondary mb-1" style="font-size: 0.95rem;">
                                        Pembina: {{ $ekstra->pembina }}
                                    </div>

                                    <div class="text-secondary" style="font-size: 0.95rem;">
                                        Jadwal: {{ $ekstra->jadwal }}
                                    </div>
                                </div>

                                <a href="{{ route('siswa.show', $ekstra->id) }}"
                                    class="btn btn-primary btn-sm px-3 shadow-sm">
                                    Lihat Detail
                                </a>

                            </div>

                        @empty

                            <div class="text-center p-4 text-muted">
                                Belum ada data ekstrakurikuler.
                            </div>

                        @endforelse

                    </div>

                </div>
            </div>


            {{-- TOMBOL DAFTAR --}}
            <a href="{{ route('siswa.create') }}"
                class="btn btn-outline-primary btn-block font-weight-bold py-2 shadow-sm mb-4">
                Daftar Ekstrakurikuler
            </a>

        </div>
    </div>

@endsection


@push('scripts')

    {{-- SWEETALERT --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))

        <script>
            Swal.fire({
                title: "Berhasil Mendaftar!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "OK",
                confirmButtonColor: "#4e73df"
            });
        </script>

    @endif

@endpush