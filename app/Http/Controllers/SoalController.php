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
}
