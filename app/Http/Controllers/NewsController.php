<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function category()
    {
        $newsCategory = (new NewsModel())->getAllNewsCategory();
        return view('news.category', ['newsCategory' => $newsCategory]);
    }

    public function item($id)
    {
        $new = (new NewsModel())->getNewById($id);
        return view('news.new', ['new' => $new]);
    }

    public function newsByCategory($id) {
        $news = (new NewsModel())->getNewsByCategoryId($id);
        return view('news.news', ['news' => $news]);
    }
}
