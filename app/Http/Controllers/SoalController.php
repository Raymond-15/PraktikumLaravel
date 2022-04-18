<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $soal = Soal::all();
        return view('soal', compact('soal'));
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function simpan(Request $request)
    {
        Soal::create($request->all());
        return redirect('soal');
    }

    public function ubah($id)
    {
        $data = Soal::find($id);
        return view('ubah', compact('data'));
    }

    public function perbaharui(Request $request)
    {
        $soal = Soal::find($request->id);
        $soal->namaMk = $request->namaMk;
        $soal->dosen = $request->dosen;
        $soal->jumlah_soal = $request->jumlah_soal;
        $soal->keterangan = $request->keterangan;
        $soal->save();
        return redirect('soal');
    }

    public function hapus($id)
    {
        $data = Soal::find($id);
        $data->delete();
        return redirect('soal');
    }
}
