<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BioCategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'bio_id',
        'categori_id',
    ];

public function categori(){
    return $this->hasMany(Categori::class);
}

public function Bio(){
    return $this->hasMany(Bio::class);
}
}