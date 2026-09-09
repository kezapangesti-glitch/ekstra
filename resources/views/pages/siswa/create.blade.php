@extends('layouts.siswa')

@section('title', 'Form Pendaftaran Siswa')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Pendaftaran</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Input Data Siswa</h5>
                    <a href="{{ route('siswa.index') }}" class="btn btn-sm btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ route('siswa.store') }}" method="POST">
                        @csrf

                        {{-- NAMA SISWA --}}
                        <div class="form-group mb-3">
                            <label for="name" class="font-weight-bold">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}" readonly>
                        </div>

                        <!-- No. Telp -->
                        <div class="form-group mb-3">
                            <label for="telp" class="font-weight-bold">No. Telp <span class="text-danger"></span></label>
                            <input type="text" name="telp" id="telp" class="form-control @error('telp') is-invalid @enderror" value="{{ old('telp') }}" placeholder="Masukkan No Telp" required>
                            @error('telp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- KELAS --}}
                        <div class="form-group mb-3">
                            <label for="kelas" class="font-weight-bold">Kelas <span class="text-danger">*</span></label>
                            <select name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror"
                                required>
                                <option value="">-- Pilih Kelas --</option>
                                {{-- Farmasi --}}
                                <option value="X Farmasi" {{ old('kelas') == 'X Farmasi' ? 'selected' : ''}}>X Farmasi</option>
                                <option value="XI FKK" {{ old('kelas') == 'XI FKK' ? 'selected' : '' }}>XI FKK</option>

                                {{-- RPL --}}
                                <option value="X PPLG 1" {{ old('kelas') == 'X PPLG 1' ? 'selected' : '' }}>X PPLG 1</option>
                                <option value="X PPLG 2" {{ old('kelas') == 'X PPLG 2' ? 'selected' : '' }}>X PPLG 2</option>
                                <option value="X PPLG 3" {{ old('kelas') == 'X PPLG 3' ? 'selected' : '' }}>X PPLG 3</option>
                                <option value="XI RPL 1" {{ old('kelas') == 'XI RPL 1' ? 'selected' : '' }}>XI RPL 1</option>
                                <option value="XI RPL 2" {{ old('kelas') == 'XI RPL 2' ? 'selected' : '' }}>XI RPL 2</option>
                                <option value="XI RPL 3" {{ old('kelas') == 'XI RPL 3' ? 'selected' : '' }}>XI RPL 3</option>

                                {{-- PEMASARAN --}}
                                <option value="X PM 1" {{ old('kelas') == 'X PM 1' ? 'selected' : '' }}>X PM 1</option>
                                <option value="X PM 2" {{ old('kelas') == 'X PM 2' ? 'selected' : '' }}>X PM 2</option>
                                <option value="X PM 3" {{ old('kelas') == 'X PM 3' ? 'selected' : '' }}>X PM 3</option>
                                <option value="XI BD 1" {{ old('kelas') == 'XI BD 1' ? 'selected' : '' }}>XI BD 1</option>
                                <option value="XI BD 2" {{ old('kelas') == 'XI BD 2' ? 'selected' : '' }}>XI BD 2</option>
                                <option value="XI BR" {{ old('kelas') == 'XI BR' ? 'selected' : '' }}>XI BR</option>

                                {{-- TSM --}}
                                <option value="X TO 1" {{ old('kelas') == 'X TO 1' ? 'selected' : '' }}>X TO 1</option>
                                <option value="X TO 2" {{ old('kelas') == 'X TO 2' ? 'selected' : '' }}>X TO 2</option>
                                <option value="X TO 3" {{ old('kelas') == 'X TO 3' ? 'selected' : '' }}>X TO 3</option>
                                <option value="X TO 4" {{ old('kelas') == 'X TO 4' ? 'selected' : '' }}>X TO 4</option>
                                <option value="XI TSM 1" {{ old('kelas') == 'XI TSM 1' ? 'selected' : '' }}>XI TSM 1</option>
                                <option value="XI TSM 2" {{ old('kelas') == 'XI TSM 2' ? 'selected' : '' }}>XI TSM 2</option>
                                <option value="XI TSM 3" {{ old('kelas') == 'XI TSM 3' ? 'selected' : '' }}>XI TSM 3</option>
                                <option value="XI TSM 4" {{ old('kelas') == 'XI TSM 4' ? 'selected' : '' }}>XI TSM 4</option>
                            </select>

                            @error('kelas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Ekstrakurikuler --}}
                        <div class="form-group mb-3">
                            <label for="eskul_id" class="font-weight-bold">Pilih Ekstrakurikuler <span class="text-danger"></span></label>
                            <select name="eskul_id" id="eskul_id" class="form-control @error('eskul_id') is-invalid @enderror" required>
                                <option value="">-- Pilih Ekstrakurikuler --</option>
                                @foreach ($ekstras as $ekstra)
                                    <option value="{{ $ekstra->id }}" {{ old('eskul_id', $selectedEkstraId ?? '') == $ekstra->id ? 'selected' : '' }}> {{ $ekstra->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('eskul_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- ALASAN --}}
                        <div class="form-group mb-4">
                            <label for="alasan_mengikuti" class="font-weight-bold">Alasan Mengikuti <span class="text-danger"></span></label>
                            <textarea name="alasan_mengikuti" id="alasan_mengikuti" rows="4" class="form-control @error('alasan_mengikuti') is-invalid @enderror" placeholder="Masukkan Alasan..." required>{{ old('alasan_mengikuti') }}</textarea>
                            @error('alasan_mengikuti')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i> Daftar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection