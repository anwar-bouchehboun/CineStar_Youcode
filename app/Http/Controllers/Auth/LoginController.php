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
            // Retrieve user information from Google
            $user = Socialite::driver('google')->user();

            // Register or login the user
            $this->registerOrLoginUser($user);

            // Redirect to the home page
            return redirect(RouteServiceProvider::HOME);

        } catch (\Exception $e) {
            // Handle exceptions, you might want to log the error
            // and redirect the user to an error page or login page
            // with an error message.
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

    protected function registerOrLoginUser($data)
    {
       //test
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