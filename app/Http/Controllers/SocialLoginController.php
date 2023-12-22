<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function githubredirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubcallback()
    {
        try {
            $user = Socialite::driver('github')->user();
            // dd($user);
            $user = User::updateOrCreate([
                'github_id' => $user->id,
            ], [
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make($user->id),
            ]);

            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        } catch (user) {
            return redirect()->route('login')->with('message', 'Credencial not match');
        }

    }

    public function googleredirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback()
    {
        $user = Socialite::driver('google')->user();
        // dd($user);
        $user = User::updateOrCreate([
            'google_id' => $user->id,
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make($user->id),
            'image' => $user->picture,
        ]);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
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
            'password' => Hash::make($user->id),
        ]);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
