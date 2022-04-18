@extends('layouts.main')

@section('container')
<section id="ubahSoal" class="mt-4">
  <div class="container">
    <div class="card">
      <div class="card-header">Ubah Soal <a class="btn btn-sm btn-info float-right" href="{{ url('soal') }}">Kembali</a></div>
      <div class="card-body">
        <form action="{{ route('soal.perbaharui') }}" method="post">
          @csrf
          <input type="hidden" name="id" value="{{ $data->id }}">
          <div class="form-group">
            <label for="namaMk">Mata Kuliah</label>
            <input type="text" name="namaMk" class="form-control" id="namaMk" value="{{ $data->namaMk }}">
          </div>
          <div class="form-group">
            <label for="dosen">Dosen</label>
            <input type="text" name="dosen" class="form-control" id="dosen" value="{{ $data->dosen }}">
          </div>
          <div class="form-group">
            <label for="jumlah_soal">Jumlah Soal</label>
            <input type="number" name="jumlah_soal" class="form-control" id="jumlah_soal" value="{{ $data->jumlah_soal }}">
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" class="form-control" id="keterangan">{{ $data->keterangan }}</textarea>
          </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>

    </div>
  </div>
</section>
@endsection