<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Bio;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function user(){
        if(auth()->user()->login == 'admin'){
            return view('admin.admin');
        }
        return view('user.user');
    }

    public function favorites()
{
    $favorites = auth()->user()->favoriteBiographies;

    return view('favorites', compact('favorites'));
}


}
