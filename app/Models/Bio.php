<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'patronomic',
        'img',
        'birthday_date',
        'death_date',
        'birthday_img',
        'birthday_place',
        'death_img',
        'death_place',
        'infoforchildren_id',
        'infoforparents_id',
        'childhood_live_img',
        'childhood_live_content',
        'stydent_live_img',
        'stydent_live_content',
        'osnovnaia_live_img',
        'osnovnaia_live_content',
        'pensia_live_img',
        'pensia_live_content',
        'achivments_id',
        'categori_id',
    ];

    public function Biocategori(){
        return $this->hasMany(BioCategori::class);
    }
   


}
