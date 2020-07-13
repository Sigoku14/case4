<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;

class OAuthLoginController extends Controller
{
    // Googleの認証ページへのリダイレクト処理
    public function getGoogleAuth($provider)
    {
        $redirectUrl = Socialite::driver($provider)->redirect()->getTargetUrl();

        return response()->json([
            'redirect_url' => $redirectUrl
        ]);
    }

    // Googleの認証情報からユーザー情報の取得
    // public function authGoogleCallback()
    // {
    //     $googleUser = Socialite::driver('google')->user();
    //     $user = User::firstOrNew(['email' => $googleUser->email]);

    //     if (!$user->exists) {
    //         $user['name'] = $googleUser->getNickName() ?? $googleUser->getName() ?? $googleUser->getNick();
    //         $user['email'] = $googleUser->email; // Gmailアドレス
    //         $user['password'] = str_random(); // 適当に生成

    //         $user->save();
    //     }

    //     // Auth::login($user);
    //     // return redirect()->route('home')->with('id', 1);
    // }
}
