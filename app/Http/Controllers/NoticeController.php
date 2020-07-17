<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Language\LanguageClient;

class NoticeController extends Controller
{
    public function notice(Request $request)
    {
        // $text = $request->input('text');
        $text = "梅田駅が混雑している。難波も多かったな。";

        # Your Google Cloud Platform project ID
        $projectId = 'case4';

        # Instantiates a client
        $language = new LanguageClient([
            'projectId' => $projectId
        ]);

        # Detects the sentiment of the text
        $annotation = $language->analyzeSentiment($text);
        $analyze = $language->analyzeEntities($text);
        $sentiment = $annotation->sentiment();

        // dd($analyze->entities());
        foreach ($analyze->entities() as $name) {
            // dd($name['name']);
            $keyword = $name['name'];


            // キーワード検索API
            $client = new Client();
            // $response = $client->request("GET", 'http://geoapi.heartrails.com/api/json?method=suggest&keyword='.$keyword.'&matching=prefix');
            $response = $client->request("GET", 'https://maps.googleapis.com/maps/api/geocode/json?address='.$keyword.'components=country:JP&key=AIzaSyCTy9rzX3GsQbXDlw_JzDrU_jPm5WhA0XE');

            // APIで取得したJSONデータを配列変換
            $posts = $response->getBody();
            $posts = json_decode($posts, true);

        }
    }
}
