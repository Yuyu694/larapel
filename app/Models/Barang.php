<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama', 'harga', 'stok']; // Daftar kolom yang dapat diisi

    protected $table = 'barang'; // Nama tabel yang terkait

    // ...

    public function getHargaAttribute($value)
    {
        return 'Rp ' . number_format($value, 2);
    }
}