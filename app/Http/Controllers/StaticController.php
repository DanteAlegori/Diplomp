<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        return view('index');
    }

    public function onas(){
        return view('static.onas');
    }

    public function info(){
        return view('static.info');
    }

    public function contacts(){
        return view('static.contacts');
    }
}


