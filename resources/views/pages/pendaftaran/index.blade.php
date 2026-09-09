@extends('layouts.app')

@section('title', 'Pendaftaran Page')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kelola Pendaftaran</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex align-items-center justify-content-between">
        <h5 class="m-0 font-weight-bold text-primary">Data Pendaftaran</h5>

        <div style="width: 250px;">
            <input type="text" id="searchNama" class="form-control form-control-sm"
                placeholder="Cari nama siswa...">
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover" id="tabelPendaftaran" width="100%" cellspacing="0">
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
                                <a href="{{ route('admin.pendaftaran.show', $pendaftaran->id) }}"
                                    class="btn btn-link text-info p-0 mx-1"
                                    title="Detail">
                                    <span class="fa fa-eye"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div id="dataTidakDitemukan" class="text-center text-muted mt-3" style="display: none;">
            Data siswa tidak ditemukan.
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('searchNama').addEventListener('keyup', function() {
        let keyword = this.value.toLowerCase();
        let rows = document.querySelectorAll('#tabelPendaftaran tbody tr');
        let jumlahData = 0;

        rows.forEach(function(row) {
            let nama = row.cells[1].textContent.toLowerCase();

            if (nama.includes(keyword)) {
                row.style.display = '';
                jumlahData++;
            } else {
                row.style.display = 'none';
            }
        });

        if (jumlahData === 0) {
            document.getElementById('dataTidakDitemukan').style.display = 'block';
        } else {
            document.getElementById('dataTidakDitemukan').style.display = 'none';
        }
    });
</script>
@endpush