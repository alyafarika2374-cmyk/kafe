<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table = 'stoks';

    protected $fillable = [
        'nama_bahan',
        'kategori',
        'jumlah_stok',
        'satuan',
        'stok_minimum',
        'status',
    ];

    protected $casts = [
        'jumlah_stok' => 'integer',
        'stok_minimum' => 'integer',
    ];
}
