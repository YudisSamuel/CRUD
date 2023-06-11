<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorApi extends Model
{
    protected $table ="SensorSuhu";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','Data_Sensor','Status','Tanggal','Waktu'
    ];
}
