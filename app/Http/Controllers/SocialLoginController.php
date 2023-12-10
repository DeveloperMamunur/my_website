<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteLoginController extends Controller
{
    public function githubredirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubcallback()
    {
        $user = Socialite::driver('github')->user();
        // dd($user);
        $user = User::updateOrCreate([
            'github_id' => $user->id,
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'password' => encrypt('Test@123'),
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    public function googleredirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback()
    {
        $user = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'google_id' => $user->id,
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'password' => encrypt('Test@123'),
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    public function faceboockredirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function faceboockcallback()
    {
        $user = Socialite::driver('facebook')->user();
        // dd($user);
        $user = User::updateOrCreate([
            'facebook_id' => $user->id,
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'password' => encrypt('Test@123'),
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }
}
