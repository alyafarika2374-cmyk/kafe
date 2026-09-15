<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = [
        'nama',
        'kategori',
        'harga',
        'stok',
        'gambar_menu',
        'deskripsi',
        'status',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
        'stok' => 'integer',
        'status' => 'boolean',
    ];

    public function getImageUrlAttribute()
    {
        if (empty($this->gambar_menu)) {
            return asset('ast/img/gallery/cafe/americano.jpg');
        }

        if (str_starts_with($this->gambar_menu, 'http') || str_starts_with($this->gambar_menu, 'ast/') || str_starts_with($this->gambar_menu, 'assets/')) {
            return asset($this->gambar_menu);
        }

        if (file_exists(public_path('ast/img/gallery/cafe/' . $this->gambar_menu))) {
            return asset('ast/img/gallery/cafe/' . $this->gambar_menu);
        }

        return asset('storage/' . $this->gambar_menu);
    }
}
