<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        // dd($googleUser);

        $existUser = User::where('email', $googleUser->email)->first();
        if ($existUser) {
            Auth::loginUsingId($existUser->id);
            return redirect('/');
        } else {

            $user_data = [
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                // 'google_id' => $googleUser->id,
                // 'avatar' => $googleUser->avatar
            ];
            User::create($user_data);

            $existUser = User::where('email', $googleUser->email)->first();
            if ($existUser) {
                Auth::loginUsingId($existUser->id);
                return redirect('/');
            }
        }
    }
}
