<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otomotif extends Model
{
    use HasFactory;

    protected $fillable = [
    'merek',
    'model',
    'tahun',
    'harga',
    ];
  
}
