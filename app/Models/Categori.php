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
    ];

public function Newscategori(){
    return $this->hasMany(NewsCategori::class);
}

public function Biocategori(){
    return $this->hasMany(BioCategori::class);
}


    
}
