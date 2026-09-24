<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $primaryKey = 'nisn';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'alamat',
        'jenkel',
        'kontak'
    ];
}
