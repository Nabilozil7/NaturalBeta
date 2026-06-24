<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class properti extends Model
{
    //
     protected $fillable = [
        'nama_pemilik',
        'jenis',
        'lokasi',
        'luas_m2',
        'status',
        'harga',
        'gambar'
    ];
}
