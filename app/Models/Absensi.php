<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'nama_guru',
        'kode_guru',
        'hadir',
        'tanggal'

    ];
}
