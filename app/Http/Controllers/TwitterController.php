<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{
    public function index(Request $request)
    {
        //ツイートを5件取得
        $result = \Twitter::get('statuses/home_timeline', array("q" => "コロナ", 'count' => 20));

        //ViewのTwitter.blade.phpに渡す
        return view('twitter', [
            "result" => $result
        ]);
    }

    public function makeCsv(Request $request)
    {
        // リスト
        $lists = [
            ['おはよう', 'おやすみ'],
            ['こんにちは', 'さようなら'],
        ];

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
        $array = ['header1', 'header2'];
        $result = fopen($file, 'a');
        // ファイルに書き出し
        fputcsv($result, $array);
        fclose($result);


        // 値を入れる
        foreach ($lists as $list) {
            $result = fopen($file, 'a');
            // ファイルに書き出し
            fputcsv($result, $list);
            fclose($result);
        }

        $response = file_get_contents($file);

        return response($response, 200)
            ->header('Content-Type', 'text/csv')
            ->header('Content-Disposition', 'attachment; filename=' . $filename);
    }
}
