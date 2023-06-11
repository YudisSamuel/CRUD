<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table ="alat";
    protected $primaryKey ="id_Alat";
    protected $fillable = [
        'id_Alat','Nama_Alat','id_SensorAsap','id_SensorApi','id_SensorSuhu','id_SensorGas','id_Lokasi'
    ];
}
