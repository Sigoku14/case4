<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Language\LanguageClient;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class NoticeController extends Controller
{
    public function notice(Request $request)
    {
        $text = $request->input('text');
        // $text = "梅田駅が混雑している。京橋も多かったな。";

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
        $date = date('Y-m-d H:i:s');

        foreach ($analyze->entities() as $name) {
            $keyword = $name['name'];

            $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json', [
                'new_forward_geocoder' => true,
                'address' => $keyword,
                'components' => 'country:JP',
                'key' => 'AIzaSyCTy9rzX3GsQbXDlw_JzDrU_jPm5WhA0XE'
            ]);

            // APIで取得したJSONデータを配列変換
            $posts = $response->getBody();
            $posts = json_decode($posts, true);

            foreach ($posts['results'] as $post) {
                $geo = $post['geometry'];
            }
            $cnt = 0;
            foreach ($geo['location'] as $loc) {
                $location[$cnt] = $loc;
                $cnt++;
            }
            DB::table('jam_infos')->insert(
                ['name' => $keyword, 'latitude' => $location[0], 'longitude' => $location[1], 'created_at' => $date]
            );
        }

        $today = date('Y-m-d');
        $array = DB::table('jam_infos')
            ->select()
            ->whereBetween('created_at', [$today . ' 00:00:00', $today . ' 23:59:59'])
            ->get();

        $place = [];
        $ll = [];
        foreach ($array as $ary) {
            $name = $ary->name;
            $lat = $ary->latitude;
            $lng = $ary->longitude;

            $ll[$name]['lat'] = $lat;
            $ll[$name]['lng'] = $lng;

            if ($place == []) {
                $place[$name] = 1;
            } else {
                if (!array_key_exists($name, $place)) {
                    $place[$name] = 1;
                } else {
                    $place[$name] = $place[$name] + 1;
                }
            }
        }
        $max = max($place);
        $handred = 100 / $max;
        $all = [];
        foreach ($place as $key => $value) {
            $all[$key] = $handred * $value;
        }

        foreach ($all as $key => $value) {
            DB::table('jam_predicts')->insert(
                ['name' => $key, 'latitude' => $ll[$key]['lat'], 'longitude' => $ll[$key]['lng'], 'predicts_date' => $today, 'percentage' => $value, 'created_at' => $date]
            );
        }
    }
}
