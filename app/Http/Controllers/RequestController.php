<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function index()
    {
        $diseases = DB::table('diseases')->select()->get();
        $infections = DB::table('infections')->select()->get();
        $inf_measures = DB::table('inf_measures')->select()->get();
        $inf_persons = DB::table('inf_persons')->select()->get();
        $inf_predicts = DB::table('inf_predicts')->select()->get();
        $jam_areas = DB::table('jam_areas')->select()->get();
        $jam_infos = DB::table('jam_infos')->select()->get();
        $jam_predicts = DB::table('jam_predicts')->select()->get();
        $locations = DB::table('locations')->select()->get();
        $pop_jam_rates = DB::table('pop_jam_rates')->select()->get();
        $tweets = DB::table('tweets')->select()->get();
        // ->where('id', '=', 1)
        // $password_resets = DB::table('password_resets')->select()->get();
        // $users = DB::table('users')->select()->get();
        
        dd($diseases);
        // dd($infections);
        // dd($inf_measures);
        // dd($inf_persons);
        // dd($inf_predicts);
        // dd($jam_areas);
        // dd($jam_infos);
        // dd($jam_predicts);
        // dd($locations);
        // dd($password_resets);
        // dd($pop_jam_rates);
        // dd($tweets);
        // dd($users);

        return response()->json(['diseases' => $diseases]);
        return response()->json(['infections' => $infections]);
        return response()->json(['inf_measures' => $inf_measures]);
        return response()->json(['inf_persons' => $inf_persons]);
        return response()->json(['inf_predicts' => $inf_predicts]);
        return response()->json(['jam_areas' => $jam_areas]);
        return response()->json(['jam_infos' => $jam_infos]);
        return response()->json(['jam_predicts' => $jam_predicts]);
        return response()->json(['locations' => $locations]);
        return response()->json(['pop_jam_rates' => $pop_jam_rates]);
        return response()->json(['tweets' => $tweets]);
        // return ['apple' => 'red', 'peach' => 'pink'];
        // return view('index', compact('values'));
    }
}
