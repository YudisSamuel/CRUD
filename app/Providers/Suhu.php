<?php
namespace app;

use Illuminate\Database\Eloquent\Model;

class sensor_suhu extends Model
{
    protected $primarykey = "id";
    protected $fillable = [
        'id','Data_Sensor','Status','Tanggal','Waktu'
    ];
}