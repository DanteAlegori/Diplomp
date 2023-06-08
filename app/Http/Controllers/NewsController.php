<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Coment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function allnews()
    {
            $news = News::all();
            return view('news.news', compact('news'));

    }

    public function news($id)
    {
        $News = News::findOrFail($id);
        $comments = Coment::where('news_id', $id)
                            ->where('approved', true)
                            ->with('user')
                            ->latest()
                            ->get();

        return view('news.news_one', compact('News', 'comments'));
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
    public function storeComment(Request $request, $News, $user_id = null)
{
    $request->validate([
        'name' => 'required',
        'content' => 'required'
    ]);

    $coment = new Coment;
    $coment->post_id = $News->id;
    $coment->user_id = $user_id ?? Auth::id();
    $coment->name = $request->name;
    $coment->content = $request->content;
    $coment->save();

    return back()->with('success', 'Комментарий ожидает подтверждения администратором.');
}

}

