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

    public function allcategori()
    {

        $categori = Categori::all();
        return view('admin.categori.admin-categori', compact('categori'));
    }

    public function updatecategori($id)
    {
        $categori = Categori::find($id);
        return view('admin.categori.upgrate-categori', compact('categori'));
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



    public function categoriupdate(Request $request)
    {

        $id = $request->input('categori_id');
        $categori = Categori::findOrFail($id);

        

        $categori->name = $request->input('name');
        $categori->description = $request->input('description');
        $categori->save();

        return view('admin.admin');
    }
}
