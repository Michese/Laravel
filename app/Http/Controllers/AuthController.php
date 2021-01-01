<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view('auth.index');
    }

    public function signIn(Request $request): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('auth::index');
    }
}
