<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function allnews()
    {
        $empty_news = News::where('content', '=', '')->get();

        if ($empty_news) {
            foreach ($empty_news as $news) {
                $news->delete();
            }
        }

            $News = News::all();
            return view('news.news', compact('News'));

    }

    public function news($id)
    {
        $News = News::find($id);
        return view('news.news_one', compact('News'));
    }


}

