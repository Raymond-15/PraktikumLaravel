<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $fillable = ['namaMk', 'dosen', 'jumlah_soal', 'keterangan'];
}
