@extends('layouts.main')

@section('container')
    {{-- soal --}}
<section id="soal" class="soal mt-4">
  <div class="container">
    <div class="card">
      <div class="card-header">Data Soal <a class="btn btn-sm btn-primary float-right" href="{{ url('soal/tambah') }}">Tambah</a></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Mk</th>
                <th scope="col">Dosen</th>
                <th scope="col">Jumlah Soal</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($soal as $sl)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $sl->namaMk }}</td>
                <td>{{ $sl->dosen }}</td>
                <td>{{ $sl->jumlah_soal }}</td>
                <td>{{ $sl->keterangan }}</td>
                <td>
                  <a href="{{ url('soal/ubah/'. $sl->id) }}" type="button" class="btn btn-sm btn-warning">Ubah</a>
                  <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">Hapus</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda yakin ingin mengapus data?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="{{ url('soal/hapus/'. $sl->id) }}" type="button" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
</section>
{{-- akhir soal --}}
@endsection