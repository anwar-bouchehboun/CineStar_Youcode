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

            $this->registerOrLoginUser($user);
            return redirect(RouteServiceProvider::FILM);

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
            $user = User::updateOrCreate(
                ['email' => $data->email], // Unique constraint to find or create the user
                [
                    'name' => $data->name,
                    'provider_id' => $data->id,
                    'avatar' => $data->avatar,
                ]
            );

            // After creating or updating the user, assign the 'member' role
            $user->assignRole('member');

        }

        Auth::login($user);
    }
}