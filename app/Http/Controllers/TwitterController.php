<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(Request $request)
    {
        //ツイートを5件取得
        $result = \Twitter::get('search/tweets', array("q" => "混雑", 'count' => 100, 'geocode' => '35.794507,139.790788,1000km'));
        $res = json_decode(json_encode($result), true);

        // dd($res);
        return redirect('makeCsv')->withInput($res);
    }

    public function makeCsv(Request $request)
    {
        $req = $request->session()->get('_old_input');
        // dd($req["statuses"]);
        $cnt = 1;
        $lists = [];
        foreach ($req["statuses"] as $list) {
            // foreach ($list as $li) {
            //     $lists = $li['text'];
            // }
            $lists[$cnt] = $list["text"];
            $cnt++;
        }
        // dd($lists);

        $filename = 'demo.csv';
        $csv_file_path = storage_path('app/' . $filename);
        $result = fopen($csv_file_path, 'w');
        if ($result === false) {
            throw new Exception('ファイルの書き込みに失敗しました。');
        } else {
            fwrite($result, pack('C*', 0xEF, 0xBB, 0xBF)); // BOM をつける
        }
        fclose($result);
        $file = $result;

        // ヘッダー
        $array = ['header1'];
        $result = fopen($csv_file_path, 'w');
        // ファイルに書き出し
        fputcsv($result, $array);
        fclose($result);


        // 値を入れる
        foreach ($lists as $list) {
            $result = fopen($csv_file_path, 'a');
            // ファイルに書き出し
            fputcsv($result, [$list]);
            fclose($result);
            // dd($list);
        }

        $response = file_get_contents($csv_file_path);

        return response($response, 200)
            ->header('Content-Type', 'text/csv')
            ->header('Content-Disposition', 'attachment; filename=' . $filename);
    }
}
