<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'nip',
    //     'name',
    //     'email',
    //     'username',
    //     'jk',
    //     'alamat',
    //     // 'kode_guru'
    // ];
    protected $guarded = ['id'];

    // CARA WEB 
    // protected $table ="guru";

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
// GURUD AN KELAS
    // public function kelasgr()
    // {
    //     return $this->hasOne(Kelas::class);
    // }
// GURU dan SISWA
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
