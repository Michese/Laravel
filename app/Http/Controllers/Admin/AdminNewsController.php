<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\createNewRequest;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function create(CreateNewRequest $request): \Illuminate\Http\RedirectResponse
    {
        $post = $request->post();
        $model = new News;
        $model->addNew($post);
        return redirect()->route('news::item', ['id' => $model->news_id]);
    }

    public function createView(Request $request) {
        $categories = NewsCategory::all();
        return view('admin.news.create', [
            "categories" => $categories
        ]);
    }

    public function newsByCategory($id) {
        $news = (new News)->getNewsByCategoryId($id);
        return view('admin.news.news', ['news' => $news]);
    }

    public function delete($categoryId, Request $request)
    {
        $id = $request->post('id');
        (new News)->deleteNewById($id);
        return redirect()->route('news::index', ['category_id' => $categoryId]);
    }
}
