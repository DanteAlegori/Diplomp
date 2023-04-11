<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoforchildren extends Model
{
    use HasFactory;
    protected $fillable = [
        'img',
        'name',
        'surname',
        'patronomic',

        
    ];
    public function bio()
    {
      return $this->belongsTo(Bio::class);
    }
}
