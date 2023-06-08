<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'img',
        'name',
        'zagolovok',
        'content',
        
    ];

    public function categori()
    {
        return $this->belongsTo(Categori::class);
    }
   
    
}
