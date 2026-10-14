<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $table = 'buses';

    protected $fillable = [
        'nama_bus',
        'plat_nomor',
        'kelas_bus',
        'kode_rute',
        'kapasitas_kursi',
        'fasilitas',
        'harga_tiket',
        'image'
    ];
}