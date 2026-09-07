@extends('layouts.app')

@section('title', 'Create New - Ekstra page')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Ekstrakurikuler</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form action="{{ route('admin.ekstra.store') }}" method="post">
                    @csrf

                    <div class="card-header">
                        <h5 class="card-title"></h5>
                    </div>

                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Nama Ekstra</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" @error('name') is-invalid @enderror>
                            
                            @error('name')
                                <div class="invalid-feedback d-block">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="pembina" class="form-label">Pembina</label>
                            <input type="text" name="pembina" id="pembina" value="{{ old('pembina') }}" class="form-control" @error('pembina') is-invalid @enderror>
                            
                            @error('pembina')
                                <div class="invalid-feedback d-block">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                             <label for="jadwal" class="form-label">Jadwal</label>

                            <input type="text" name="jadwal" id="jadwal" value="{{ old('jadwal') }}" class="form-control @error('jadwal') is-invalid @enderror" placeholder="Contoh: Senin, 15:00 - 17:00">
                                
                            @error('jadwal')
                                <div class="invalid-feedback d-block">
                                 <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi" id="deskripsi" value="{{ old('deskripsi') }}" class="form-control" @error('deskripsi') is-invalid @enderror>
                            
                            @error('deskripsi')
                                <div class="invalid-feedback d-block">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.ekstra.index') }}" class="btn btn-secondary mr-2">Batal</a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save mr-1"></i> Simpan
                            </button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection