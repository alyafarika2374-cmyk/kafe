<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table = "roles";

    protected $fillable = [
        'name',
        'email',
        'telepon',
        'password',
        'peran',
        'status_akun'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'status_akun' => 'boolean',
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
