<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelanggan',
        'jenis_ps',
        'nomor_unit',
        'durasi_jam',
        'total_biaya',
        'status',
    ];
}