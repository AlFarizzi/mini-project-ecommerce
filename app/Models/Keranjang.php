<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $fillable = [
        "costumer_id", "seller_id", "barang_id",
        "jumlah", "harga_satuan", "total_harga"
    ];
}
