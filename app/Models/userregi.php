<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\userregi as Authenticatable;


class userregi extends Model
{
    use HasFactory;
     //protected $guarded=[];
     protected $table='userregis';
     protected $fillable = [
        'name',
        'email',
        'password',
        'stream',
        'u_image',
     
      ];

      
}
