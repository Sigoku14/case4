<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Laravel\Ui\Presets\React;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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

    public function putJson()
    {
        return view('jsonSend');
    }
    public function getJson(Request $request)
    {
        // $json = json_decode($request->file('json'));
        $json = json_decode($request->file('json'), true) ?? [];

        // dd($request->file('json'));

        foreach ($json as $parts) {
            $name = $parts['name'];
            $lat = $parts['latitude'];
            $long = $parts['longitude'];
            $predicts_date = $parts['date'];
            $at = date('Y-m-d H:i:s');

            DB::table('jam_predicts')->insert(
                ['name' => $name, 'latitude' => $lat, 'longitude' => $long, 'predicts_date' => $predicts_date, 'created_at' => $at, 'updated_at' => $at]
            );
        }
        return view('jsonSend');
    }
}
