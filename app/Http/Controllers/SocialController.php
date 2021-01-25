<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function loginVK()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function responseVK(User $model)
    {
        $user = Socialite::driver('vkontakte')->user();
        $ownUser = User::query()
            ->where(['id_vk' => $user->getId()])->first();
        if(is_null($ownUser)) {
            $ownUser = $model->fill([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => null,
            ]);
            $ownUser->id_vk = $user->getId();
            $ownUser->save();
        }
        \Auth::login($ownUser);
        return redirect()->route('index');
    }

    public function loginFB()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function responseFB(User $model)
    {
        $user = Socialite::driver('facebook')->user();
        $ownUser = User::query()
            ->where(['id_fb' => $user->getId()])->first();
        if(is_null($ownUser)) {
            $ownUser = $model->fill([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => null,
            ]);
            $ownUser->id_vk = $user->getId();
            $ownUser->save();
        }
        \Auth::login($ownUser);
        return redirect()->route('index');
    }
}
