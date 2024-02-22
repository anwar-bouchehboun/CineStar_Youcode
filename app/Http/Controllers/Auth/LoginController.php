<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {

        try {
            //create a user using socialite driver google
            $user = Socialite::driver('google')->user();

            // if the user exits, use that user and login

            $this->_registerOrLoginUser($user);
            return redirect(RouteServiceProvider::HOME);

            //catch exceptions
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }


    //facebook
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $this->_registerOrLoginUser($user);
        return redirect("/");

    }

    protected function _registerOrLoginUser($data)
    {

        $user = User::where('email', '=', $data["email"])->first();
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }
        Auth::login($user);
    }
}
