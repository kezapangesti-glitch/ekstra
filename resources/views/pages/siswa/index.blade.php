@extends('layouts.siswa')

@section('title', 'Dashboard Siswa')

@section('content')
    <div class="mb-4">
        <h1 class="h3 font-weight-bold text-gray-800">Selamat datang, {{ Auth::user()->name ?? 'siswa'   }}!</h1>
        <p class="text-muted mb-0">Temukan dan daftar ekstrakurikuler yang kamu minati.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Ekstrakurikuler</h6>
                    <small class="text-muted">Pilih ekstrakurikuler yang tersedia.</small>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @forelse ($ekstras as $ekstra)
                            <div class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <div>
                                    <h5 class="font-weight-bold text-dark mb-1">{{ $ekstra->name }}</h5>
                                    <div class="text-secondary mb-1" style="font-size: 0.95rem;">Pembina:
                                        {{ $ekstra->pembina }}</div>
                                    <div class="text-secondary" style="font-size: 0.95rem;">Jadwal: {{ $ekstra->jadwal }}
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

            <a href="{{ route('siswa.create') }}"
                class="btn btn-outline-primary btn-block font-weight-bold py-2 shadow-sm mb-4">
                Daftar Ekstrakurikuler
            </a>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "OK",
                confirmButtonColor: "#4e73df"
            });
        </script>
    @endif
@endpush