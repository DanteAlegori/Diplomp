<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        return view('Index');
    }

    public function onas(){
        return view('static.onas');
    }

   
}


