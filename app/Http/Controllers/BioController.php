<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use Illuminate\Http\Request;

class BioController extends Controller
{
    public function allbio(){
    

        $Bios = Bio::all();
        return view('bio.bio',compact('Bios'));
    }

    public function bio($id){
        $Bios = Bio::find($id);
        return view('bio.bio_one', compact('Bios'));
    }









}
