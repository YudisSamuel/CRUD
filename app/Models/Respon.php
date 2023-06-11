<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    protected $table ="Respon";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','Data_Respon'
    ];
}
