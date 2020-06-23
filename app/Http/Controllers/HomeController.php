<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Laravel\Ui\Presets\React;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function welcome(Request $request)
    {
        if ($request->input('state')) {
            return view('home');
        }
        return view('welcome');
    }
}
