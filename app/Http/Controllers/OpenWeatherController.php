<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class OpenWeatherController extends Controller
{
    /**
     * Returns a json from OpenWeather api based on latitude
     * and longitude
     * 
     * @param $lat Latitude
     * @param $lon Longitude
     * @param $units Units of measurement
     */
    public function getResponse($lat, $lon, $units = 'metric')
    {
        $response = Http::get(env('OPEN_WEATHER_URL'), [
            'lat' => $lat,
            'lon' => $lon,
            'units' => $units,
            'appid' => env("OPEN_WEATHER_APPID"),
        ]);

        return $response->json();
    }
}
