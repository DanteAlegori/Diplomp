<?php

namespace App\Http\Controllers;

use App\Models\Bio;

use App\Models\News;
use App\Models\Categori;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }




public function createbioview(){

    return view('admin.bio.create-bio');

}


    
    public function createbio(Request $request){
        $bio = Bio::create();
       
    
        $imageName = null;
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $bio->img = $imageName;
        }
    
        $birthImageName = null;
        if ($request->hasFile('birthday_img')) {
            $birthImage = $request->file('birthday_img');
            $birthImageName = time() . 'birth.' . $birthImage ->getClientOriginalExtension();
            $birthImage->move(public_path('img'), $birthImageName);
            $bio->birthday_img = $birthImageName;
        }
    
        $deathImageName = null;
        if ($request->hasFile('death_img')) {
            $deathImage = $request->file('death_img');
            $deathImageName = time() . 'death.' . $deathImage ->getClientOriginalExtension();
            $deathImage->move(public_path('img'), $deathImageName);
            $bio->death_img = $deathImageName;
        }
    
        $childhoodImageName = null;
        if ($request->hasFile('childhood_live_img')) {
            $childhoodImage = $request->file('childhood_live_img');
            $childhoodImageName = time() . 'childhood.' . $childhoodImage ->getClientOriginalExtension();
            $childhoodImage->move(public_path('img'), $childhoodImageName);
            $bio->childhood_live_img = $childhoodImageName;
        }
    
        $stydentImageName = null;
        if ($request->hasFile('stydent_live_img')) {
            $stydentImage = $request->file('stydent_live_img');
            $stydentImageName = time() . 'stydent.' . $stydentImage ->getClientOriginalExtension();
            $stydentImage->move(public_path('img'), $stydentImageName);
            $bio->stydent_live_img = $stydentImageName;
        }
    
        $osnovnaiaImageName = null;
        if ($request->hasFile('osnovnaia_live_img')) {
            $osnovnaiaImage = $request->file('osnovnaia_live_img');
            $osnovnaiaImageName = time() . 'osnovnaia.' . $osnovnaiaImage ->getClientOriginalExtension();
            $osnovnaiaImage->move(public_path('img'), $osnovnaiaImageName);
            $bio->osnovnaia_live_img = $osnovnaiaImageName;
        }
    
        $pensiaImageName = null;
        if ($request->hasFile('pensia_live_img')) {
            $pensiaImage = $request->file('pensia_live_img');
            $pensiaImageName = time() . 'pensia.' . $pensiaImage ->getClientOriginalExtension();
            $pensiaImage->move(public_path('img'), $pensiaImageName);
            $bio->pensia_live_img = $pensiaImageName;
        }
    
        $bio->name = $request->input('name');
        $bio->surname = $request->input('surname');
        $bio->patronomic = $request->input('patronomic');
        $bio->birthday_date = $request->input('birthday_date');
        $bio->death_date = $request->input('death_date');
        $bio->birthday_place = $request->input('birthday_place');
        $bio->death_place = $request->input('death_place');
        $bio->childhood_live_content = $request->input('childhood_live_content');
        $bio->stydent_live_content = $request->input('stydent_live_content');
        $bio->osnovnaia_live_content = $request->input('osnovnaia_live_content');
        $bio->pensia_live_content = $request->input('pensia_live_content');
        $bio->save();
    
        return view('admin.admin');

    }


    public function delete($id)
    {
        $Bios = Bio::find($id);
        Bio::destroy($id);
        return view('admin.admin');
    }

    public function allbio()
    { $empty_bios = Bio::where('childhood_live_content', '=', '')->get();

        if ($empty_bios) {
            foreach ($empty_bios as $bio) {
                $bio->delete();
            }
        }

            $Bios = Bio::all();
            return view('admin.bio.admin-bio', compact('Bios'));

    }


    public function updatePage($id)
    {
        $Bios = Bio::find($id);
        return view('admin.bio.upgrate-bio', compact('Bios'));
    }

    public function updatebio(Request $request){
       
        $bio = Bio::where('id', $request->id)->first();
    

        if ($bio) {
            $imageName = null;
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('img'), $imageName);
                $bio->img = $imageName;
           
        
        $imageName = null;
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $bio->img = $imageName;
        }
    
        $birthImageName = null;
        if ($request->hasFile('birthday_img')) {
            $birthImage = $request->file('birthday_img');
            $birthImageName = time() . 'birth.' . $birthImage ->getClientOriginalExtension();
            $birthImage->move(public_path('img'), $birthImageName);
            $bio->birthday_img = $birthImageName;
        }
    
        $deathImageName = null;
        if ($request->hasFile('death_img')) {
            $deathImage = $request->file('death_img');
            $deathImageName = time() . 'death.' . $deathImage ->getClientOriginalExtension();
            $deathImage->move(public_path('img'), $deathImageName);
            $bio->death_img = $deathImageName;
        }
    
        $childhoodImageName = null;
        if ($request->hasFile('childhood_live_img')) {
            $childhoodImage = $request->file('childhood_live_img');
            $childhoodImageName = time() . 'childhood.' . $childhoodImage ->getClientOriginalExtension();
            $childhoodImage->move(public_path('img'), $childhoodImageName);
            $bio->childhood_live_img = $childhoodImageName;
        }
    
        $stydentImageName = null;
        if ($request->hasFile('stydent_live_img')) {
            $stydentImage = $request->file('stydent_live_img');
            $stydentImageName = time() . 'stydent.' . $stydentImage ->getClientOriginalExtension();
            $stydentImage->move(public_path('img'), $stydentImageName);
            $bio->stydent_live_img = $stydentImageName;
        }
    
        $osnovnaiaImageName = null;
        if ($request->hasFile('osnovnaia_live_img')) {
            $osnovnaiaImage = $request->file('osnovnaia_live_img');
            $osnovnaiaImageName = time() . 'osnovnaia.' . $osnovnaiaImage ->getClientOriginalExtension();
            $osnovnaiaImage->move(public_path('img'), $osnovnaiaImageName);
            $bio->osnovnaia_live_img = $osnovnaiaImageName;
        }
    
        $pensiaImageName = null;
        if ($request->hasFile('pensia_live_img')) {
            $pensiaImage = $request->file('pensia_live_img');
            $pensiaImageName = time() . 'pensia.' . $pensiaImage ->getClientOriginalExtension();
            $pensiaImage->move(public_path('img'), $pensiaImageName);
            $bio->pensia_live_img = $pensiaImageName;
        }
    }
    
        $bio->name = $request->input('name');
        $bio->surname = $request->input('surname');
        $bio->patronomic = $request->input('patronomic');
        $bio->birthday_date = $request->input('birthday_date');
        $bio->death_date = $request->input('death_date');
        $bio->birthday_place = $request->input('birthday_place');
        $bio->death_place = $request->input('death_place');
        $bio->childhood_live_content = $request->input('childhood_live_content');
        $bio->stydent_live_content = $request->input('stydent_live_content');
        $bio->osnovnaia_live_content = $request->input('osnovnaia_live_content');
        $bio->pensia_live_content = $request->input('pensia_live_content');
        $bio->update();
    
        return view('admin.admin');
    } else {
        // обработка ошибки, если модель не найдена
        return back()->with('error', 'Модель не найдена.');
    }

    }


    public function createnews(Request $request){

        
        
        return view('admin.news.create-news');

    }


    public function createnewss(Request $request){

        
        $imageName = null;
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
        }
        $news = News::create([
            'name' => $request->input('name'),
            'content' => $request->input('content'), 
            'img' => $imageName,
            'zagolovok' => $request->input('zagolovok')
        ]);

        return view('admin.admin');

    }
    public function allnews()
    { $empty_news = News::where('content', '=', '')->get();

        if ($empty_news) {
            foreach ($empty_news as $news) {
                $news->delete();
                
            }
        }
            $News = News::all();
            return view('admin.news.admin-news-up', compact('News'));
    }

    public function deleteNews($id)
    {
        $New = News::find($id);
        News::destroy($id);
        return view('admin.admin');
    }


    public function updatenews(Request $request){

            $id = $request->id;
            $news = News::findOrFail($id);
        
            $imageName = null;
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('img'), $imageName);
                $news->img = $imageName;
            }
        
            $news->name = $request->input('name');
            $news->content = $request->input('content');
            $news->zagolovok = $request->input('zagolovok');
            $news->save();
        
            return view('admin.news.upgrate-news', compact('news'));
    }


    public function allcategori()
    { 

            $categori = Categori::all();
            return view('admin.categori.admin-categori', compact('categori'));
    }

    public function updatecategori($id)
    {
        $categori = Categori::find($id);
        return view('admin.categori.create-categori', compact('categori'));
    }


    public function createcategori(Request $request)
    {
        return view('admin.categori.create-categori');
    }


    public function createcategorii(Request $request)
    {
        $categori = Categori::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
     
        return view('admin.admin');
    }

    public function deletecategori($id)
    {
        $categori = Categori::find($id);
        Categori::destroy($id);
        return view('admin.categori.admin-categori', compact('categori'));
        
    }



    







}