<?php

namespace App\Http\Controllers;

use App\Models\Bio;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }


    
  public function create(Request $request){

        $Bios = Bio::create([
        'name'=> $request->name ,
        'surname' => $request->surname,
        'patronomic' => $request->patronomic,

        'img'=>$img = optional($request ->file('img')) ->getClientOriginalName(),
        $img = optional($request->file('img')) ->store('public/img'),

        'birthday_date' => $request->birthday_date,
        'death_date' => $request->death_date,

        'birthday_img' =>$birthday_img = optional( $request->file('birthday_img'))->getClientOriginalName(),
        $birthday_img= optional($request->file('birthday_img')) ->store('public/img'),

        'birthday_place' => $request->birthday_place,

        'death_img'=>$death_img= optional($request->file('death_img')) ->getClientOriginalName(),
        $death_img= optional($request->file('death_img')) ->store('public/img'),

        'death_place' => $request->death_place,


        'childhood_live_img'=>$childhood_live_img = optional($request ->file('childhood_live_img')) ->getClientOriginalName(),
        $childhood_live_img = optional($request->file('childhood_live_img')) ->store('public/img'),

        'childhood_live_content' => $request->childhood_live_content,



        'stydent_live_img'=>$stydent_live_img = optional($request ->file('stydent_live_img')) ->getClientOriginalName(),
        $stydent_live_img = optional($request->file('stydent_live_img')) ->store('public/img'),

        'stydent_live_content' => $request->stydent_live_content,

        'osnovnaia_live_img'=>$osnovnaia_live_img = optional($request ->file('osnovnaia_live_img')) ->getClientOriginalName(),
        $osnovnaia_live_img = optional($request->file('osnovnaia_live_img')) ->store('public/img'),

        'osnovnaia_live_content' => $request->osnovnaia_live_content,

        'pensia_live_img'=>$pensia_live_img = optional($request ->file('pensia_live_img')) ->getClientOriginalName(),
        $pensia_live_img = optional($request->file('pensia_live_img'))->store('public/img'),

        'pensia_live_content' => $request->pensia_live_content, 
    ]);
       
       
        return view('admin.create-bio',compact('Bios'));

    }

    public function bio($id)
    {
        $Bios = Bio::find($id);
        return view('admin.delete', compact('Bios'));
    }

    public function delete($id)
    {
        $Bios = Bio::find($id);
        Bio::destroy($id);
        return view('admin.admin');
    }

    public function allbio()
    {

            $Bios = Bio::all();
            return view('admin.admin-bio', compact('Bios'));

    }


    public function updatePage($id)
    {
        $Bios = Bio::find($id);
        return view('admin.upgrate-bio', compact('Bios'));
    }

    public function updatebio(Request $request){

     
        $Bios = Bio::where('id',$request-> id)->update([
            'name'=> $request->name ,
            'surname' => $request->surname,
            'patronomic' => $request->patronomic,
    
            'img'=>$img = optional($request ->file('img')) ->getClientOriginalName(),
            $img = optional($request->file('img')) ->store('public/img'),
    
            'birthday_date' => $request->birthday_date,
            'death_date' => $request->death_date,
    
            'birthday_img' =>$birthday_img = optional( $request->file('birthday_img'))->getClientOriginalName(),
            $birthday_img= optional($request->file('birthday_img')) ->store('public/img'),
    
            'birthday_place' => $request->birthday_place,
    
            'death_img'=>$death_img= optional($request->file('death_img')) ->getClientOriginalName(),
            $death_img= optional($request->file('death_img')) ->store('public/img'),
    
            'death_place' => $request->death_place,
    
    
            'childhood_live_img'=>$childhood_live_img = optional($request ->file('childhood_live_img')) ->getClientOriginalName(),
            $childhood_live_img = optional($request->file('childhood_live_img')) ->store('public/img'),
    
            'childhood_live_content' => $request->childhood_live_content,
    
    
    
            'stydent_live_img'=>$stydent_live_img = optional($request ->file('stydent_live_img')) ->getClientOriginalName(),
            $stydent_live_img = optional($request->file('stydent_live_img')) ->store('public/img'),
    
            'stydent_live_content' => $request->stydent_live_content,
    
            'osnovnaia_live_img'=>$osnovnaia_live_img = optional($request ->file('osnovnaia_live_img')) ->getClientOriginalName(),
            $osnovnaia_live_img = optional($request->file('osnovnaia_live_img')) ->store('public/img'),
    
            'osnovnaia_live_content' => $request->osnovnaia_live_content,
    
            'pensia_live_img'=>$pensia_live_img = optional($request ->file('pensia_live_img')) ->getClientOriginalName(),
            $pensia_live_img = optional($request->file('pensia_live_img'))->store('public/img'),
    
            'pensia_live_content' => $request->pensia_live_content, 
                ]);
        return view('admin.admin',compact('Bios'));

    }
}