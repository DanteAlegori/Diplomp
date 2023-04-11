<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function user(){
        if(auth()->user()->login == 'admin'){
            return view('admin.admin');
        }
        return view('user.user');
    }


}
