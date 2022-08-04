<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherApiController extends Controller
{
    public static function getWhatheronApi()
    {
        $appid = "636e2a99d2eb4031d50025d62341cc06";
        $response  = https::get("api.openweathermap.org/data/2.5/weather?lat=$lat &lon=$long&lang=pt_br&appid=$appid";

        if($response->status() == 400 ){
            return $response;
        }else{

        }

    }
}
private function saveWhather(){
    apiWhater()

}
