<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table ="Provinsi";
    protected $primaryKey ="id_Provinsi";
    protected $fillable = [
        'id_Provinsi','Nama_Provinsi','Alamat'
    ];
}
