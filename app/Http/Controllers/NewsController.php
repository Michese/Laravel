<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;

class NewsController extends Controller
{
    public function index()
    {
        $news = (new NewsModel())->getAllNews();
        return view('news.news', ['news' => $news]);
    }

    public function item($id)
    {
        $new = (new NewsModel())->getNewById($id);
        return view('news.new', ['new' => $new]);
    }

    public function add()
    {
        return view('news.add');
    }
}
