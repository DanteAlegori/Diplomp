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
        'categori_id',
    ];

    public function categori()
    {
        return $this->belongsTo(Categori::class);
    }
   
    public function comments()
    {
        return $this->hasMany(Coment::class);
    }
}
