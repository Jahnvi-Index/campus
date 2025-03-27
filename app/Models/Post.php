<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='table_name';
    protected $fillable = [
        'user_id',
        'title',
        'short_desc',
        'story',
        'image',
     
      ];
}
