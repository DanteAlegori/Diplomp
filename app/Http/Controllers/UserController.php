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

public function createbioviewuser()
{

    return view('user.create-bio-user');
}



public function createbiouser(Request $request)
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
    $bio->status = false;
    $bio->sourse = $request->input('sourse');


    $bio->save();

    return view('user.user');
}
}
