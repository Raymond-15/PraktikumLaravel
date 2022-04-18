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
                  <a href="{{ url('soal/hapus/'. $sl->id) }}" type="button" class="btn btn-sm btn-danger">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</section>
{{-- akhir soal --}}
@endsection