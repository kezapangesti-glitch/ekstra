@extends('layouts.app') 
 
@section('title', 'Create New - Ekstra page') 
 
@section('content') 
 
<div class="d-sm-flex align-items-center justify-content-between mb-4"> 
    <h1 class="h3 mb-0 text-gray-800">Tambah Ekstrakurikuler</h1> 
</div> 
 
<div class="row"> 
    <div class="col-md-12"> 
        <div class="card shadow mb-4"> 
            <form action="{{ route('admin.ekstra.store') }}" method="post"> 
                @csrf

                <div class="card-header d-flex justify-content-between align-items-center"> 
                    <h5 class="card-title mb-0">Form Ekstrakurikuler</h5>

                    <a href="{{ route('admin.ekstra.index') }}" class="btn btn-secondary btn-sm"> 
                        <i class="fa fa-arrow-left mr-1"></i>
                        Kembali
                    </a>
                </div> 

                <div class="card-body"> 
                    {{-- NAMA EKSTRA --}} 
                    <div class="form-group mb-3"> 
                        <label for="name" class="form-label"> 
                            Nama Ekstra 
                        </label> 
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"> 

                        @error('name') 
                            <div class="invalid-feedback d-block"> 
                                <span>{{ $message }}</span> 
                            </div> 
                        @enderror 
                    </div> 

                    {{-- PEMBINA --}} 
                    <div class="form-group mb-3"> 
                        <label for="pembina" class="form-label"> 
                            Pembina 
                        </label> 
                        <input type="text" name="pembina" id="pembina" value="{{ old('pembina') }}" class="form-control @error('pembina') is-invalid @enderror"> 

                        @error('pembina') 
                            <div class="invalid-feedback d-block"> 
                                <span>{{ $message }}</span> 
                            </div> 
                        @enderror 
                    </div> 

                    {{-- JADWAL --}} 
                    <div class="form-group mb-3"> 
                        <label for="jadwal" class="form-label"> 
                            Jadwal 
                        </label> 
                        <input type="text" name="jadwal" id="jadwal" value="{{ old('jadwal') }}" class="form-control @error('jadwal') is-invalid @enderror"> 

                        @error('jadwal') 
                            <div class="invalid-feedback d-block"> 
                                <span>{{ $message }}</span> 
                            </div> 
                        @enderror 
                    </div> 

                    {{-- DESKRIPSI --}} 
                    <div class="form-group mb-4"> 
                        <label for="deskripsi" class="font-weight-bold"> 
                            Deskripsi 
                        </label> 
                        <textarea name="deskripsi" id="deskripsi" rows="7" class="form-control @error('deskripsi') is-invalid @enderror" style="width: 100%; min-height: 180px;">{{ old('deskripsi') }}</textarea> 

                        @error('deskripsi') 
                            <div class="invalid-feedback"> 
                                {{ $message }} 
                            </div> 
                        @enderror 
                    </div> 

                    {{-- TOMBOL --}} 
                    <div class="d-flex justify-content-end"> 

                        <button type="submit" class="btn btn-primary"> 
                            <i class="fa fa-save mr-1"></i> 
                            Simpan 
                        </button> 

                    </div> 

                </div> 
            </form> 

        </div> 
    </div> 
</div> 
 
@endsection