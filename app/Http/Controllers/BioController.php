<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use App\Models\Categori;
use App\Models\Favorite_biography;
use Illuminate\Http\Request;

class BioController extends Controller
{
    public function allbio()
    {


        $Bios = Bio::all();
        $categori = Categori::all();
        return view('bio.bio', compact('Bios','categori'));
    }

    public function bio($id)
    {
        $Bios = Bio::find($id);
        return view('bio.bio_one', compact('Bios'));
    }


    public function createbioview()
    {

        return view('admin.bio.create-bio');
    }



    public function createbio(Request $request)
    {
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
            $birthImageName = time() . 'birth.' . $birthImage->getClientOriginalExtension();
            $birthImage->move(public_path('img'), $birthImageName);
            $bio->birthday_img = $birthImageName;
        }

        $deathImageName = null;
        if ($request->hasFile('death_img')) {
            $deathImage = $request->file('death_img');
            $deathImageName = time() . 'death.' . $deathImage->getClientOriginalExtension();
            $deathImage->move(public_path('img'), $deathImageName);
            $bio->death_img = $deathImageName;
        }

        $childhoodImageName = null;
        if ($request->hasFile('childhood_live_img')) {
            $childhoodImage = $request->file('childhood_live_img');
            $childhoodImageName = time() . 'childhood.' . $childhoodImage->getClientOriginalExtension();
            $childhoodImage->move(public_path('img'), $childhoodImageName);
            $bio->childhood_live_img = $childhoodImageName;
        }

        $stydentImageName = null;
        if ($request->hasFile('stydent_live_img')) {
            $stydentImage = $request->file('stydent_live_img');
            $stydentImageName = time() . 'stydent.' . $stydentImage->getClientOriginalExtension();
            $stydentImage->move(public_path('img'), $stydentImageName);
            $bio->stydent_live_img = $stydentImageName;
        }

        $osnovnaiaImageName = null;
        if ($request->hasFile('osnovnaia_live_img')) {
            $osnovnaiaImage = $request->file('osnovnaia_live_img');
            $osnovnaiaImageName = time() . 'osnovnaia.' . $osnovnaiaImage->getClientOriginalExtension();
            $osnovnaiaImage->move(public_path('img'), $osnovnaiaImageName);
            $bio->osnovnaia_live_img = $osnovnaiaImageName;
        }

        $pensiaImageName = null;
        if ($request->hasFile('pensia_live_img')) {
            $pensiaImage = $request->file('pensia_live_img');
            $pensiaImageName = time() . 'pensia.' . $pensiaImage->getClientOriginalExtension();
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

        $bio->opisanie_deitelnosti = $request->input('opisanie_deitelnosti');
        $bio->xp_for_work = $request->input('xp_for_work');
        $bio->achivments = $request->input('achivments');
        $bio->nagradi = $request->input('nagradi');
        $bio->categori_id = $request->input('categori_id');

        $bio->save();

        return view('admin.admin');
    }


    public function delete($id)
    {
        $Bios = Bio::find($id);
        Bio::destroy($id);
        return view('admin.admin');
    }

    public function allbioadmin()
    {

        $Bios = Bio::all();
        return view('admin.bio.admin-bio', compact('Bios'));
    }


    public function updatePage($id)
    {
        $bio = Bio::find($id);
        return view('admin.bio.upgrate-bio')->with('bio', $bio);
    }

    public function updatebio(Request $request)
    {

        $id = $request->input('bio_id');
        $bio = Bio::findOrFail($id);;


        if ($bio) {
            $imageName = null;
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('img'), $imageName);
                $bio->img = $imageName;


                $imageName = null;
                if ($request->hasFile('img') && $request->file('img')->isValid()) {
                    $image = $request->file('img');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('img'), $imageName);
                    $bio->img = $imageName;
                }

                $birthImageName = null;
                if ($request->hasFile('birthday_img')) {
                    $birthImage = $request->file('birthday_img');
                    $birthImageName = time() . 'birth.' . $birthImage->getClientOriginalExtension();
                    $birthImage->move(public_path('img'), $birthImageName);
                    $bio->birthday_img = $birthImageName;
                }

                $deathImageName = null;
                if ($request->hasFile('death_img')) {
                    $deathImage = $request->file('death_img');
                    $deathImageName = time() . 'death.' . $deathImage->getClientOriginalExtension();
                    $deathImage->move(public_path('img'), $deathImageName);
                    $bio->death_img = $deathImageName;
                }

                $childhoodImageName = null;
                if ($request->hasFile('childhood_live_img')) {
                    $childhoodImage = $request->file('childhood_live_img');
                    $childhoodImageName = time() . 'childhood.' . $childhoodImage->getClientOriginalExtension();
                    $childhoodImage->move(public_path('img'), $childhoodImageName);
                    $bio->childhood_live_img = $childhoodImageName;
                }

                $stydentImageName = null;
                if ($request->hasFile('stydent_live_img')) {
                    $stydentImage = $request->file('stydent_live_img');
                    $stydentImageName = time() . 'stydent.' . $stydentImage->getClientOriginalExtension();
                    $stydentImage->move(public_path('img'), $stydentImageName);
                    $bio->stydent_live_img = $stydentImageName;
                }

                $osnovnaiaImageName = null;
                if ($request->hasFile('osnovnaia_live_img')) {
                    $osnovnaiaImage = $request->file('osnovnaia_live_img');
                    $osnovnaiaImageName = time() . 'osnovnaia.' . $osnovnaiaImage->getClientOriginalExtension();
                    $osnovnaiaImage->move(public_path('img'), $osnovnaiaImageName);
                    $bio->osnovnaia_live_img = $osnovnaiaImageName;
                }

                $pensiaImageName = null;
                if ($request->hasFile('pensia_live_img')) {
                    $pensiaImage = $request->file('pensia_live_img');
                    $pensiaImageName = time() . 'pensia.' . $pensiaImage->getClientOriginalExtension();
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
            $bio->opisanie_deitelnosti = $request->input('opisanie_deitelnosti');
            $bio->xp_for_work = $request->input('xp_for_work');
            $bio->achivments = $request->input('achivments');
            $bio->nagradi = $request->input('nagradi');
            $bio->categori_id = $request->input('categori_id');
            $bio->save();

            return redirect()->route('admin')->with('success', 'Информация успешно обновлена');
        }
    }
    public function addFavoriteBio(Request $request, $user_id, $bio_id)
    {
        $existing_favorite_bio = Favorite_biography::where('user_id', $user_id)->where('bio_id', $bio_id)->first();

        if ($existing_favorite_bio) {
            // Запись уже существует, ничего не делаем
        } else {
            // Создаем новую запись
            $favorite_bio = new Favorite_biography;
            $favorite_bio->user_id = $user_id;
            $favorite_bio->bio_id = $bio_id;
            $favorite_bio->save();
            
        }
        return back();
    }


    public function removeFavorite(Request $request)
    {
        $user_id = $request->user_id;
        $bio_id = $request->bio_id;

        $favorite_bio = Favorite_biography::where('user_id', $user_id)->where('bio_id', $bio_id)->first();

        if ($favorite_bio) {
            $favorite_bio->delete();
            return redirect()->back()->with('success', 'Биография была удалена из избранного.');
        } else {
            return redirect()->back()->with('error', 'Биография не была найдена в вашем избранном списке.');
        }
        
    }


    public function showFavorites($user_id)
    {
        $favorites = Favorite_biography::getFavoriteBios($user_id);
        return view('user.favorites', compact('favorites'));
    }



    
    public function index(Request $request)
    {
        $query = Bio::query();
    
        if ($request->categori) {
            $query->where('categori_id', $request->categori);
        }
    
        $Bios = $query->get();
        $categori = Categori::all();
    
        return view('bio.fitr_bio', compact('Bios', 'categori'));
    }
    
}
