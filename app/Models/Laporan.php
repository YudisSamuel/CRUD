<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table ="Laporan";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','Data_Laporan'
    ];
}
