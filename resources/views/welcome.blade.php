@extends('layouts.auth')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <h4>Form Ekstrakurikuler</h4>
                </div>

                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('ekstrakurikuler.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>No. Telepon</label>
                            <input type="text" name="telp" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Kelas</label>
                            <input type="kelas" name="kelas" class="form-control">
                        </div>
                        {{-- <div class="mb-3">
                            <label>Tujuan</label>
                            <select name="employee_id" class="form-control">
                                <option value="">-- Pilih Karyawan --</option>
                                @foreach($employees as $employee)
                                    <option value="{{ $employee->id }}">
                                        {{ $employee->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div> --}}
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
