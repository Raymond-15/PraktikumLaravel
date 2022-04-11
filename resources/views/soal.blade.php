@extends('layouts.main')

@section('container')
    {{-- soal --}}
<section id="soal" class="soal mt-4">
  <div class="container">
    {{-- <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form> --}}

    <a href="/">
      <button class="btn btn-primary" type="button">Tambah</button>
    </a>
    <br>
    <br>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Mk</th>
            <th scope="col">Dosen</th>
            <th scope="col">Jumlah Soal</th>
            <th scope="col">Keterangan</th>
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
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
{{-- akhir soal --}}
@endsection