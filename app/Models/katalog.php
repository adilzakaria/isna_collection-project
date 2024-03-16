<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
    use HasFactory;
    protected $table = 'katalogs';
    protected $fillable = [
        'gambar',
        'nama_produk',
        'kategori',
    ];
}
