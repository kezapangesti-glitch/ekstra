@extends('layouts.app')

@section('title', 'Ekstra page')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kelola Ekstrakurikuler</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex align-items-center justify-content-between">
        <h5 class="m-0 font-weight-bold text-primary">Data Ekstra</h5>
        <a href="{{ route('admin.ekstra.create') }}" class="btn btn-primary btn-sm">
            <span class="fa fa-plus mr-2"></span>
            <span>Tambah</span>
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover datatable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Ekstra</th>
                        <th>Pembina</th>
                        <th>Jadwal</th>
                        <th>Deskripsi</th>
                        <th style="width: 120px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($ekstras as $key => $ekstra)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $ekstra->name }}</td>
                        <td>{{ $ekstra->pembina }}</td>
                        <td>{{ $ekstra->jadwal }}</td>
                        <td>{{ $ekstra->deskripsi }}</td>
                        <td>
                            <a href="{{ route('admin.ekstra.edit', $ekstra->id) }}" class="btn btn-link text-warning p-0 mx-1"title="Edit">
                                <span class="fa fa-edit"></span>
                            </a>

                            <a href="javascript:void(0)" onclick="handleDestroy('{{ route('admin.ekstra.destroy', encrypt($ekstra->id)) }}')" class="btn btn-link text-danger p-0 mx-1" title="Hapus">
                                <span class="fa fa-trash"></span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<form id="form-destroy" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">
@endpush

@push('scripts')
<script type="text/javascript" src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript"> 
    $(document).ready(function() {
        $('.datatable').DataTable();
    });

    function handleDestroy(url) {
        Swal.fire({
            title: "",
            text: "Apakah anda yakin ingin menghapus data ekstra?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Tidak",
            cancelButtonText: "Ya, Hapus",
            confirmButtonColor: "#d33"
        }).then((result) => {
            if (result.isConfirmed) {
                $('#form-destroy').attr('action', url);
                $('#form-destroy').submit();
            }
        });
    }
</script>

@if(Session::has('success'))
<script>
    Swal.fire({
        title: "Berhasil!",
        text: "{{ Session::get('success') }}",
        icon: "success",
        timer: 2000,
        showConfirmButton: false
    });
</script>
@endif 
@endpush