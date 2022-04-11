@extends('layouts.main')

@section('container')
<section id="tambahSoal" class="mt-4">
  <div class="container">
    <div class="card">
      <div class="card-header">Tambah Soal <a class="btn btn-sm btn-info float-right" href="{{ url('soal') }}">Kembali</a></div>
      <div class="card-body">
        <form action="{{ route('soal.simpan') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="namaMk">Mata Kuliah</label>
            <input type="text" name="namaMk" class="form-control" id="namaMk" placeholder="Masukkan nama matakuliah">
          </div>
          <div class="form-group">
            <label for="dosen">Dosen</label>
            <input type="text" name="dosen" class="form-control" id="dosen" placeholder="Nama dosen">
          </div>
          <div class="form-group">
            <label for="jumlah_soal">Jumlah Soal</label>
            <input type="number" name="jumlah_soal" class="form-control" id="jumlah_soal">
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea type="text" name="keterangan" class="form-control" id="keterangan">
            </textarea>
          </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>

    </div>
  </div>
</section>
@endsection