<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'provinsi',
        'kota',
        'kecamatan',
        'alamat',
        'kode',
        'ukuran',
        'jenis',
        'gambar',
        'tambahan',
        'nomor',
        'harga',
        'estimasi',
        'status',
    ];

    // Kolom yang bersifat read-only dari tabel users
    protected $guarded = [
        'nama',
        'hp',
        'email',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}

