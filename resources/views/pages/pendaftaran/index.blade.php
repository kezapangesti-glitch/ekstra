@extends('layouts.app')

@section('title', 'Pendaftaran Page')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pendaftaran Ekstrakurikuler</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Data Siswa</h5>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover datatable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Nomor Telepon</th>
                        <th>Ekstrakurikuler</th>
                        <th>Alasan Mengikuti</th>
                        <th style="width: 80px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pendaftarans as $key => $pendaftaran)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $pendaftaran->siswa->name ?? '-' }}</td>
                        <td>{{ $pendaftaran->siswa->kelas ?? '-' }}</td>
                        <td>{{ $pendaftaran->siswa->telp ?? '-' }}</td>
                        <td>{{ $pendaftaran->ekstrakurikuler->name ?? '-' }}</td>
                        <td>{{ $pendaftaran->alasan_mengikuti ?? '-' }}</td>
                        <td>
                            <a href="{{ route('admin.pendaftaran.show', $pendaftaran->id) }}" class="btn btn-link text-info p-0 mx-1" title="Lihat Detail">
                                <span class="fa fa-eye"></span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
    $('.datatable').DataTable({
        lengthChange: false,
        language: {
            search: "Cari Siswa:",
            zeroRecords: "Data tidak ditemukan",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty: "Tidak ada data",
            infoFiltered: "(difilter dari _MAX_ total data)"
        }
    });
});
</script>
@endpush