<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensor_suhu extends Model
{
    protected $table ="sensor_suhu";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','Data_Sensor','Status','Tanggal','Waktu'
    ];
}
