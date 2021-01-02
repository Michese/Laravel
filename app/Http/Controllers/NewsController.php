<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AdminNewsController;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\NewsModel;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function category()
    {
        $newsCategory = NewsCategory::all();
        return view('news.category', ['newsCategory' => $newsCategory]);
    }

    public function item($id)
    {
        $new = News::find($id);
        return view('news.new', ['new' => $new]);
    }

    public function newsByCategory($id) {
        $isAdmin = true;
        if($isAdmin == true) {
            $result = (new AdminNewsController())->newsByCategory($id);
        } else {
            $news = (new News)->getNewsByCategoryId($id);
            $result = view('news.news', ['news' => $news]);
        }
        return $result;
    }
}
