<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite_biography extends Model
{
    use HasFactory;
    protected $fillable = [
        'bio_id',
        'user_id',
    ];
   
    public static function getFavoriteBios($user_id)
    {
        return Favorite_biography::where('user_id', $user_id)->with('bio')->get();
    }

    public function User(){
        return $this->hasMany(User::class);
    }
    
    public function bio() {
        return $this->belongsTo(Bio::class);
    }
}
