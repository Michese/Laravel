<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{

    public function setLocale(Request $request)
    {
        $locale = $request->get('locale')?? 'ru';
        $request->setLocale($locale);
        $request->session()->put('locale', $request->getLocale());
        return redirect()->back();
    }
}
