<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favoritebiographies extends Model
{
    use HasFactory;
    protected $fillable = [
        'bio_id',
        'user_id',
    ];
   

}
