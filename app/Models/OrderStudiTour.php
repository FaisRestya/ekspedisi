<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStudiTour extends Model
{
    use HasFactory;
    protected $table = "order_studi_tour";
    protected $fillable = ['startDate', 'endDate', 'category', 'tipe', 'tujuan', 'jmlOrang', 'konsumen', 'phoneNumber', 'alamat', 'fotoKtp' , 'harga'];
}
