@extends('layouts.siswa')

@section('title', 'Form Pendaftaran Siswa')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Input Data Siswa</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Input Data Siswa</h5>
                    <a href="{{ route('siswa.index') }}" class="btn btn-sm btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali ke Dashboard
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ route('siswa.store') }}" method="POST">
                        @csrf

                        {{-- NAMA SISWA --}}
                        <div class="form-group mb-3">
                            <label for="name" class="font-weight-bold">Nama Siswa <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                placeholder="Masukkan Nama Siswa" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- No. Telp -->
                        <div class="form-group mb-3">
                            <label for="telp" class="font-weight-bold">No. Telp <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="telp" id="telp"
                                class="form-control @error('telp') is-invalid @enderror" value="{{ old('telp') }}"
                                placeholder="Masukkan Nomor HP" required>
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

                                {{-- RPL --}}
                                <option value="X RPL 1" {{ old('kelas') == 'X RPL 1' ? 'selected' : '' }}>X RPL 1</option>
                                <option value="X RPL 2" {{ old('kelas') == 'X RPL 2' ? 'selected' : '' }}>X RPL 2</option>
                                <option value="X RPL 3" {{ old('kelas') == 'X RPL 3' ? 'selected' : '' }}>X RPL 3</option>
                                <option value="XI RPL 1" {{ old('kelas') == 'XI RPL 1' ? 'selected' : '' }}>XI RPL 1
                                </option>
                                <option value="XI RPL 2" {{ old('kelas') == 'XI RPL 2' ? 'selected' : '' }}>XI RPL 2
                                </option>
                                <option value="XI RPL 3" {{ old('kelas') == 'XI RPL 3' ? 'selected' : '' }}>XI RPL 3
                                </option>
                                <option value="XII RPL 1" {{ old('kelas') == 'XII RPL 1' ? 'selected' : '' }}>XII RPL 1
                                </option>
                                <option value="XII RPL 2" {{ old('kelas') == 'XII RPL 2' ? 'selected' : '' }}>XII RPL 2
                                </option>
                                <option value="XII RPL 3" {{ old('kelas') == 'XII RPL 3' ? 'selected' : '' }}>XII RPL 3
                                </option>

                                {{-- PEMASARAN --}}
                                <option value="X PM 1" {{ old('kelas') == 'X PM 1' ? 'selected' : '' }}>X PM 1</option>
                                <option value="X PM 2" {{ old('kelas') == 'X PM 2' ? 'selected' : '' }}>X PM 2</option>
                                <option value="X PM 3" {{ old('kelas') == 'X PM 3' ? 'selected' : '' }}>X PM 3</option>
                                <option value="XI PM 1" {{ old('kelas') == 'XI PM 1' ? 'selected' : '' }}>XI PM 1</option>
                                <option value="XI PM 2" {{ old('kelas') == 'XI PM 2' ? 'selected' : '' }}>XI PM 2</option>
                                <option value="XI PM 3" {{ old('kelas') == 'XI PM 3' ? 'selected' : '' }}>XI PM 3</option>
                                <option value="XII PM 1" {{ old('kelas') == 'XII PM 1' ? 'selected' : '' }}>XII PM 1
                                </option>
                                <option value="XII PM 2" {{ old('kelas') == 'XII PM 2' ? 'selected' : '' }}>XII PM 2
                                </option>
                                <option value="XII PM 3" {{ old('kelas') == 'XII PM 3' ? 'selected' : '' }}>XII PM 3
                                </option>

                                {{-- TSM --}}
                                <option value="X TSM 1" {{ old('kelas') == 'X TSM 1' ? 'selected' : '' }}>X TSM 1</option>
                                <option value="X TSM 2" {{ old('kelas') == 'X TSM 2' ? 'selected' : '' }}>X TSM 2</option>
                                <option value="X TSM 3" {{ old('kelas') == 'X TSM 3' ? 'selected' : '' }}>X TSM 3</option>
                                <option value="X TSM 4" {{ old('kelas') == 'X TSM 4' ? 'selected' : '' }}>X TSM 4</option>
                                <option value="XI TSM 1" {{ old('kelas') == 'XI TSM 1' ? 'selected' : '' }}>XI TSM 1
                                </option>
                                <option value="XI TSM 2" {{ old('kelas') == 'XI TSM 2' ? 'selected' : '' }}>XI TSM 2
                                </option>
                                <option value="XI TSM 3" {{ old('kelas') == 'XI TSM 3' ? 'selected' : '' }}>XI TSM 3
                                </option>
                                <option value="XI TSM 4" {{ old('kelas') == 'XI TSM 4' ? 'selected' : '' }}>XI TSM 4
                                </option>
                                <option value="XII TSM 1" {{ old('kelas') == 'XII TSM 1' ? 'selected' : '' }}>XII TSM 1
                                </option>
                                <option value="XII TSM 2" {{ old('kelas') == 'XII TSM 2' ? 'selected' : '' }}>XII TSM 2
                                </option>
                                <option value="XII TSM 3" {{ old('kelas') == 'XII TSM 3' ? 'selected' : '' }}>XII TSM 3
                                </option>
                                <option value="XII TSM 4" {{ old('kelas') == 'XII TSM 4' ? 'selected' : '' }}>XII TSM 4
                                </option>
                            </select>

                            @error('kelas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Ekstrakurikuler --}}
                        <div class="form-group mb-3">
                            <label for="ekskul_id" class="font-weight-bold">Pilih Ekstrakurikuler <span
                                    class="text-danger">*</span></label>
                            <select name="ekskul_id" id="ekskul_id"
                                class="form-control @error('ekskul_id') is-invalid @enderror" required>
                                <option value="">-- Pilih Ekstrakurikuler --</option>
                                @foreach ($ekstras as $ekstra)
                                    <option value="{{ $ekstra->id }}"
                                        {{ old('ekskul_id', $selectedEkstraId ?? '') == $ekstra->id ? 'selected' : '' }}>
                                        {{ $ekstra->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('ekskul_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- ALASAN --}}
                        <div class="form-group mb-4">
                            <label for="alasan" class="font-weight-bold">Alasan Mengikuti <span
                                    class="text-danger">*</span></label>
                            <textarea name="alasan" id="alasan" rows="4" class="form-control @error('alasan') is-invalid @enderror"
                                placeholder="Masukkan Alasan..." required>{{ old('alasan') }}</textarea>
                            @error('alasan')
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