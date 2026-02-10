<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Carbon;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function providerRedirect($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function providerCallback($provider){
        $socialUser = Socialite::driver($provider)->user();

        if (!$socialUser->email) {
            return redirect('/login')->withErrors(['email' => 'No email returned from Google']);
        }


        $user = User::updateOrCreate([
            'email' => $socialUser->email],
         [
            'name' => $socialUser->name,
            'password' => null,
            'provider_id' => $socialUser->id,
            'provider' => $provider,
            'email_verified_at' => Carbon::now(),
        ]);
    
        Auth::login($user);

        return redirect()->intended(route('dashboard', absolute: false));

    }
}
