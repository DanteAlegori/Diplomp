<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'news_id',
        'categori_id',
    ];

public function categori(){
    return $this->hasMany(Categori::class);
}

public function  news(){
    return $this->hasMany(News::class);
}
}