<?php

namespace App\Http\Controllers;

use App\Models\Application_editor;
use App\Models\User;
use App\Models\Bio;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function user()
    {
        if (auth()->user()->login == 'admin') {
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

    public function alluser()
    {
        $users = User::all();
        $userss =User::all();
        return view('admin.user.user_all', compact('users','userss'));
    }

    public function oneuser($id)
    {
        $user = User::find($id);
        return view('admin.user.user_one', compact('user'));
    }

    public function removeUser($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('admin')->with('success', 'Пользователь успешно удален.');
        }

        return redirect()->route('admin')->with('error', 'Не удалось удалить пользователя.');
    }

    public function makeModerator($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->editor = false;
            $user->moderator = true;
            $user->save();
            return redirect()->route('admin')->with('success', 'Пользователь успешно назначен модератором.');
        }

        return redirect()->route('admin')->with('error', 'Не удалось назначить пользователя модератором.');
    }

    public function makeEditor($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->moderator = false;
            $user->editor = true;
            $user->save();
            return redirect()->route('admin')->with('success', 'Пользователь успешно назначен редактором.');
        }

        return redirect()->route('admin')->with('error', 'Не удалось назначить пользователя редактором.');
    }

    public function aplication_on_user()
    { 

        return view('user.user_zaiavka');
    }

    public function createEditorRequest(Request $request)
    {
        
    
        $user = auth()->user();
    
        $Application_editor = new Application_editor();
        $Application_editor->user_id = $user->id;
        $Application_editor->content = $request->input('content');
        $Application_editor->save();
    
        return redirect()->route('user')->with('success', 'Ваша заявка на прием редактором принята. Ожидайте уведомления.');
    }

    public function viewaprove()
    {
        $editorRequests = application_editor::all();
        return view('admin.user.apication_editor', compact('editorRequests'));
    }


    public function approve($id)
    {
        $editorRequest = Application_editor::find($id);
        $user = User::find($editorRequest->user->id);
        if ($editorRequest) {
            $user->editor = true;
            $user->save();
            $editorRequest->delete();
            return redirect()->route('admin')->with('success', "Заявка пользователя $user->name успешно подтверждена.");
        }
    
        return redirect()->route('admin')->with('error', 'Не удалось подтвердить заявку на редактора.');
    }
    public function destroy($id)
    {
        $editorRequest = Application_editor::find($id);
        if ($editorRequest) {
            $editorRequest->delete();
            return redirect()->route('admin')->with('success', 'Заявка на редактора успешно удалена.');
        }
        return redirect()->route('admin')->with('error', 'Не удалось удалить заявку на редактора.');
    }
    public function searchuser(Request $request)
{    $userss =User::all();
    $query = User::query();

    $login = $request->input('login');
    $name = $request->input('name');
    $surname = $request->input('surname');
    $email = $request->input('email');
    $editor = $request->input('editor');
    $moderator = $request->input('moderator');

    if ($login) {
        $query->where('login', 'LIKE', '%'.$login.'%');
    }
    if ($name) {
        $query->where('name', 'LIKE', '%'.$name.'%');
    }
    if ($surname) {
        $query->where('surname', 'LIKE', '%'.$surname.'%');
    }
    if ($email) {
        $query->where('email', 'LIKE', '%'.$email.'%');
    }
    
    if (isset($editor)) {
        $query->where('editor', (bool) $editor);
    }
    if (isset($moderator)) {
        $query->where('moderator', (bool) $moderator);
    }

    // Получаем результаты
    $users = $query->paginate(10);

    // Возвращаем представление с результатами поиска
    return view('admin.user.user_all', compact('users','userss'));
}
}
