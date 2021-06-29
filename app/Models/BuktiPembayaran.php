<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuktiPembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        "invoice", "foto_bukti", "costumer_id",
        "seller_id"
    ];
}
