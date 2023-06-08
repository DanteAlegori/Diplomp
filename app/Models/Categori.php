<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'categori_id',
    ];



    public function bios()
    {
        return $this->hasMany(Bio::class);
    }

    
    public function news()
    {
        return $this->hasMany(News::class);
    }
}
