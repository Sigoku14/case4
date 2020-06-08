<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function signIn()
    {
        return view("sign/signIn");
    }
    public function signUp()
    {
        return view("sign/signUp");
    }
    public function signOut()
    {
        return view("sign/signOut");
    }

    public function login(Request $request)
    {
        $mail = $request->input('mail');
        $password = $request->input('password');

        $validationMsgs = [];
        if (isset($mail) && isset($password)) {
            $us_ma = DB::table('users')->select('id')
                ->where('mail', $mail)
                ->where('password', $password)
                ->first();

            if ($us_ma !== null) {
                return redirect()->action('OrbisController@home', ['id' => $us_ma]);
            } else {
                return view("sign/signIn");
            }
        } else {
            return view("sign/signIn");
        }
    }
    public function regist(Request $request)
    {
        $mail = $request->input('mail');
        $password = $request->input('password');

        $validationMsgs = [];
        if (isset($mail) && isset($password)) {
            $us_ma = DB::table('users')
                ->where('mail', $mail)
                ->first();

            if ($us_ma !== null) {
                $validationMsgs['mail'] = "そのメールアドレスは既に登録されています。";
                return view("sign/signUp")->with('msg', $validationMsgs);
            } else {
                $created_at = date('Y-m-d H:i:s');
                $updated_at = date('Y-m-d H:i:s');
                $status = 1;
                DB::table('users')->insert(
                    ['mail' => $mail, 'password' => $password, 'created_at' => $created_at, 'updated_at' => $updated_at, 'status' => $status]
                );
                $id = DB::getPdo()->lastInsertId();
                return redirect()->action('HomeController@home', ['id' => $id]);
            }
        } else {
            return view("sign/signUp");
        }
    }
}
