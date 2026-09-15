<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasis';

    protected $fillable = [
        'nama',
        'telepon',
        'tanggal',
        'jam',
        'orang',
        'lokasi',
        'meja',
        'catatan',
        'status',
    ];
}