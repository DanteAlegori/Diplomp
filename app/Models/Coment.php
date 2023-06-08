<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'news_id',
        'content',
        'approved',
        
    ];

    public function categori()
    {
        return $this->belongsTo(Categori::class);
    }
   
    public function coments()
{
    return $this->hasMany(Coment::class);
}
}

