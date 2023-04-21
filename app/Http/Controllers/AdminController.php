<?php

namespace App\Http\Controllers;

use App\Models\Bio;

use App\Models\News;
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
        $img = optional($request->img) ->move(public_path('img'), $img),

        'birthday_date' => $request->birthday_date,
        'death_date' => $request->death_date,

        'birthday_img' =>$birthday_img = optional( $request->file('birthday_img'))->getClientOriginalName(),
        $birthday_img = optional($request->birthday_img) ->move(public_path('birthday_img'), $birthday_img),

        'birthday_place' => $request->birthday_place,

        'death_img'=>$death_img= optional($request->file('death_img')) ->getClientOriginalName(),
        $death_img = optional($request->death_img) ->move(public_path('img'), $death_img),

        'death_place' => $request->death_place,


        'childhood_live_img'=>$childhood_live_img = optional($request ->file('childhood_live_img')) ->getClientOriginalName(),
        $childhood_live_img = optional($request->childhood_live_img) ->move(public_path('img'), $childhood_live_img),

        'childhood_live_content' => $request->childhood_live_content,



        'stydent_live_img'=>$stydent_live_img = optional($request ->file('stydent_live_img')) ->getClientOriginalName(),
        $stydent_live_img = optional($request->stydent_live_img) ->move(public_path('img'), $stydent_live_img),

        'stydent_live_content' => $request->stydent_live_content,

        'osnovnaia_live_img'=>$osnovnaia_live_img = optional($request ->file('osnovnaia_live_img')) ->getClientOriginalName(),
        $osnovnaia_live_img = optional($request->osnovnaia_live_img) ->move(public_path('img'), $osnovnaia_live_img),

        'osnovnaia_live_content' => $request->osnovnaia_live_content,

        'pensia_live_img'=>$pensia_live_img = optional($request ->file('pensia_live_img')) ->getClientOriginalName(),
        $pensia_live_img = optional($request->pensia_live_img) ->move(public_path('img'), $pensia_live_img),

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
            $img = optional($request->img) ->move(public_path('img'), $img),
    
            'birthday_date' => $request->birthday_date,
            'death_date' => $request->death_date,
    
            'birthday_img' =>$birthday_img = optional( $request->file('birthday_img'))->getClientOriginalName(),
            $birthday_img = optional($request->birthday_img) ->move(public_path('birthday_img'), $birthday_img),
    
            'birthday_place' => $request->birthday_place,
    
            'death_img'=>$death_img= optional($request->file('death_img')) ->getClientOriginalName(),
            $death_img = optional($request->death_img) ->move(public_path('img'), $death_img),
    
            'death_place' => $request->death_place,
    
    
            'childhood_live_img'=>$childhood_live_img = optional($request ->file('childhood_live_img')) ->getClientOriginalName(),
            $childhood_live_img = optional($request->childhood_live_img) ->move(public_path('img'), $childhood_live_img),
    
            'childhood_live_content' => $request->childhood_live_content,
    
    
    
            'stydent_live_img'=>$stydent_live_img = optional($request ->file('stydent_live_img')) ->getClientOriginalName(),
            $stydent_live_img = optional($request->stydent_live_img) ->move(public_path('img'), $stydent_live_img),
    
            'stydent_live_content' => $request->stydent_live_content,
    
            'osnovnaia_live_img'=>$osnovnaia_live_img = optional($request ->file('osnovnaia_live_img')) ->getClientOriginalName(),
            $osnovnaia_live_img = optional($request->osnovnaia_live_img) ->move(public_path('img'), $osnovnaia_live_img),
    
            'osnovnaia_live_content' => $request->osnovnaia_live_content,
    
            'pensia_live_img'=>$pensia_live_img = optional($request ->file('pensia_live_img')) ->getClientOriginalName(),
            $pensia_live_img = optional($request->pensia_live_img) ->move(public_path('img'), $pensia_live_img),
    
            'pensia_live_content' => $request->pensia_live_content, 
                ]);
        return view('admin.upgrate-bio',compact('Bios'));

    }

    public function createnews(Request $request){

        $img = time() . '-' . optional($request->img) ->getClientOriginalName();
        $img = optional($request->img) ->move(public_path('img'), $img);
        $News = News::create([

        'name' => $request->name,
         'content' => $request->content, 
         'img' => $img, 
         'zagolovok' => $request->zagolovok
        
        ]);
        return view('admin.create-news',compact('News'));

    }
    public function allnews()
    {
            $News = News::all();
            return view('news.newsadmin', compact('News'));
    }


}