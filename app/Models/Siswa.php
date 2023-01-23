<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    // jika ini dijalankan maka eror
    // protected $table ="siswa";
    // protected $fillable = [
    //     'kelas_id',
    //     'nis',
    //     'nama',
    //     'username',
    //     'email',
    //     'jk',
    //     'alamat',
    //     'agama',
    //     'kelas',
    //     'kode_guru'
    // ];
    protected $guarded = ['id'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
