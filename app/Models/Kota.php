<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table ="Kota";
    protected $primaryKey ="id_Kota";
    protected $fillable = [
        'id_Kota','Nama_Kota','Alamat'
    ];
}
