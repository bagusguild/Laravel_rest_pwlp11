<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table="mahasiswas";
    public $timestamps=false;
    protected $primaryKey='Nim';
    public $incrementing=false;

    protected $fillable=[
        'Nim',
        'Nama',
        'Tanggal_Lahir',
        'Jurusan',
        'no_handphone',
        'Email',
        'kelas_id',
        'kelas',
    ];
}
