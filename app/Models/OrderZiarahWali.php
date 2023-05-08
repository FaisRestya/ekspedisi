<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderZiarahWali extends Model
{
    use HasFactory;
    protected $table = "order_ziarah_wali";
    protected $fillable = ['startDate', 'endDate', 'category', 'tipe', 'tujuan', 'jmlOrang', 'konsumen', 'phoneNumber', 'alamat', 'fotoKtp', 'harga'];
}
