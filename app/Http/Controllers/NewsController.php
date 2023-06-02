<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function allnews()
    {


            $News = News::all();
            return view('news.news', compact('News'));

    }

    public function news($id)
    {
        $News = News::find($id);
        return view('news.news_one', compact('News'));
    }
    public function createnews(Request $request)
    {



        return view('admin.news.create-news');
    }


    public function createnewss(Request $request)
    {


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
    public function allnewsadmin()
    {
        
        $News = News::all();
        return view('admin.news.admin-news-up', compact('News'));
    }

    public function deleteNews($id)
    {
        $New = News::find($id);
        News::destroy($id);
        return view('admin.admin');
    }
 
    public function newsadminupdate($id)
    {
        $news = News::find($id);
        return view('admin.news.upgrate-news')->with('news', $news);
    }

    public function updatenews(Request $request)
    {

        $id = $request->input('news_id');
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

        return view('admin.admin');
    }


}

