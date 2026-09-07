@extends('layouts.app')

@section('title', 'Detail Ekstra')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Ekstra</h1>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Informasi Employee</h6>
                <a href="{{ route('admin.ekstra.index') }}" class="btn btn-sm btn-secondary">
                    <i class="fa fa-arrow-left mr-1"></i> Kembali
                </a>
            </div>

            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>: {{ $ekstra->name }}</td>
                    </tr>
                    <tr>
                        <th>Pembina</th>
                        <td>: {{ $ekstra->pembina }}</td>
                    </tr>
                    <tr>
                        <th>Jadwal</th>
                        <td>: {{ $ekstra->jadwal }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>: {{ $ekstra->deskripsi }}</td>
                    </tr>
                </table>

                <div class="mt-4 pt-3 border-top">
                    <a href="{{ route('admin.ekstra.edit', $ekstra->id) }}" class="btn btn-warning">
                        <i class="fa fa-edit mr-1"></i> Edit Data
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection