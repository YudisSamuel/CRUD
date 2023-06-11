<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table ="Pengaduan";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','Data_Pengaduan'
    ];
}
