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


}

