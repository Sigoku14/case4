<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function diseases()
    {
        $diseases = DB::table('diseases')->select()->get();
        // ->where('id', '=', 1)
        dd($diseases);
        return response()->json(['diseases' => $diseases]);
    }

    public function infections()
    {
        $infections = DB::table('infections')->select()->get();
        dd($infections);
        return response()->json(['infections' => $infections]);
    }

    public function inf_measures()
    {
        $inf_measures = DB::table('inf_measures')->select()->get();
        // dd($inf_measures);
        return response()->json(['inf_measures' => $inf_measures]);
    }

    public function inf_persons()
    {
        $inf_persons = DB::table('inf_persons')->select()->get();
        // dd($inf_persons);
        return response()->json(['inf_persons' => $inf_persons]);
    }

    public function inf_predicts()
    {
        $inf_predicts = DB::table('inf_predicts')->select()->get();
        // dd($inf_predicts);
        return response()->json(['inf_predicts' => $inf_predicts]);
    }

    public function jam_areas()
    {
        $jam_areas = DB::table('jam_areas')->select()->get();
        // dd($jam_areas);
        return response()->json(['jam_areas' => $jam_areas]);
    }

    public function jam_infos()
    {
        $jam_infos = DB::table('jam_infos')->select()->get();
        // dd($jam_infos);
        return response()->json(['jam_infos' => $jam_infos]);
    }

    public function jam_predicts()
    {
        $jam_predicts = DB::table('jam_predicts')->select()->get();
        // dd($jam_predicts);
        return response()->json(['jam_predicts' => $jam_predicts]);
    }

    public function locations()
    {
        $locations = DB::table('locations')->select()->get();
        // dd($locations);
        return response()->json(['locations' => $locations]);
    }

    public function pop_jam_rates()
    {
        $pop_jam_rates = DB::table('pop_jam_rates')->select()->get();
        // dd($pop_jam_rates);
        return response()->json(['pop_jam_rates' => $pop_jam_rates]);
    }

    public function tweets()
    {
        $tweets = DB::table('tweets')->select()->get();
        // dd($tweets);
        return response()->json(['tweets' => $tweets]);
    }
}
