<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['startDate', 'endDate', 'category', 'tipe', 'tujuan', 'jmlOrang', 'konsumen', 'phoneNumber', 'alamat', 'fotoKtp', 'harga'];
}
