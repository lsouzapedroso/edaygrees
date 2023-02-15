<?php

namespace App\Console\Commands;

use App\Http\Controllers\OpenWeatherController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;


class GetPlaceWeatherInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:placeweatherinfo {lat} {lon}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets the weather information of a place and inserts into measures DB';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $response = OpenWeatherController::getResponse(
            $this->argument('lat'),
            $this->argument('lon'),
        );

        DB::table('measures')->insert([
            'id' => 20,
            'temperature' => $response['main']['temp'],
            'umidity' => $response['main']['humidity'],
            'condition' => $response['weather'][0]['main'],
            'place_id' => 3,
            'crop_id' => 1,
        ]);
    }
}
