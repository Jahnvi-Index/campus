<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userdtl extends Model
{
    use HasFactory;
    protected $table='userdtls';
    protected $fillable = [
       
        'email',
        'password',
       
     
      ];
}
