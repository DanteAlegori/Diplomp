<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class achivment extends Model
{
    use HasFactory;
    protected $fillable = [
        'achivment_img',
        'achivment_name',
    ];
    
}
