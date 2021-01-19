<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
//        dd(session());
        return view('auth.profile');
    }

    public function update(UpdateProfileRequest $request)
    {
        $redirect = redirect()->route('auth::profile');
        $currentPassword = $request->post('current_password');

        if(\Hash::check($currentPassword, Auth::user()->password)) {
            $name = $request->post('name');
            $email = $request->post('email');

            Auth::user()->name = $name;
            Auth::user()->email = $email;
            if(!empty($request->post('password'))) {
                $password = \Hash::make($request->post('password'));
                Auth::user()->password = $password;
            }
            Auth::user()->save();

        } else {
            $errorMessage = 'Неверный пароль!';
            $redirect = $redirect->with(['errorMessage' => $errorMessage]);
        }

        return $redirect;
    }
}
