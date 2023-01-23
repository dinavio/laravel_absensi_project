<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table ="kelas";
    protected $primaryKey ="id";
    protected $guarded = ['id'];
    // protected $table = "kelas";
    // public function guru()
    // {
    //     return $this->hasOne('App\Models\Guru');
    // }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

    public function guru()
    {
        return $this->hasOne(Guru::class);
    }

    // public function gurukls()
    // {
    //     return $this->belongsTo(Guru::class);
    // }
}
