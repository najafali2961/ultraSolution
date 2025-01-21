<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;

class SocialiteController extends Controller
{
    // Redirect to Provider
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();


            $fullName = $socialUser->getName();



            $user = User::updateOrCreate(
                ['email' => $socialUser->getEmail()],
                [
                    'name' => $fullName,
                    'email' => $socialUser->getEmail(),
                    'provider_id' => $socialUser->getId(),
                    'provider_name' => $provider,
                ]
            );
            Auth::login($user);
            return redirect()->route('home');
        } catch (\Exception $e) {
            // Handle errors
            return redirect()->route('login')->withErrors(['error' => 'Login failed! ' . $e->getMessage()]);
        }
    }
}
