<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function putJson()
    {
        return view('jsonSend');
    }
    public function getJson(Request $request)
    {
        $json = json_decode($request->input('json'));

        foreach ($json as $parts) {
            $popjam_id = 1;
            $area_id = $parts['area'];
            $predicts_date = $parts['date'];
            $at = date('Y-m-d H:i:s');

            DB::table('jam_predicts')->insert(
                ['popjam_id' => $popjam_id, 'area_id' => $area_id, 'predicts_date' => $predicts_date, 'created_at' => $at, 'updated_at' => $at]
            );
        }
    }
}
