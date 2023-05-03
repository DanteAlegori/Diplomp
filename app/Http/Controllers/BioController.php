<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use Illuminate\Http\Request;

class BioController extends Controller
{
    public function allbio(){
        $empty_bios = Bio::where('childhood_live_content', '=', '')->get();

if ($empty_bios) {
    foreach ($empty_bios as $bio) {
        $bio->delete();
    }
}
        $Bios = Bio::all();
        return view('bio.bio',compact('Bios'));
    }

    public function bio($id){
        $Bios = Bio::find($id);
        return view('bio.bio_one', compact('Bios'));
    }
}
