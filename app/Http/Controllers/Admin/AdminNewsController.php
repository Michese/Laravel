<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function create(Request $request): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('admin::news::createView');
    }

    public function createView() {
        return view('admin.news.create');
    }
}
