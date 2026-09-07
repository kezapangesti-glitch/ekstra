@extends('layouts.app')

@section('title', 'Detail Admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Admin</h1>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Informasi Admin</h6>
                <a href="{{ route('admin.admin.index') }}" class="btn btn-sm btn-secondary">
                    <i class="fa fa-arrow-left mr-1"></i> Kembali
                </a>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>Email</th>
                        <td>: {{ $ekstra->email }}</td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>: {{ $ekstra->password }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Terdaftar</th>
                        <td>: {{ $ekstra->created_at ? $ekstra->created_at->translatedFormat('d F Y H:i') : '-' }}</td>
                    </tr>
                    <tr>
                        <th>Terakhir Diperbarui</th>
                        <td>: {{ $ekstra->updated_at ? $ekstra->updated_at->translatedFormat('d F Y H:i') : '-' }}</td>
                    </tr>
                </table>

                <div class="mt-4 pt-3 border-top">
                    <a href="{{ route('admin.admin.edit', encrypt($ekstra->id)) }}" class="btn btn-warning">
                        <i class="fa fa-edit mr-1"></i> Edit Data
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection