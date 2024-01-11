<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        $weather = Http::get('https://api.meteo-concept.com/api/forecast/daily?token=9066109c8776ab3c8835c729bbe43d2d18c80cb86b9b5261f8c3eb7349cfb299&insee=35238')->json();

        return view('weather.index')->with([
            'weather' => $weather
        ]);
    }

    public function search()
    {
        return view('weather.search');
    }

    public function show($city)
    {
        $weather = Http::get('https://api.meteo-concept.com/api/forecast/daily?token=' . env("METEO_TOKEN_SUPER") . '&insee=' . $city)->json();

        return view('weather.index')->with([
            'weather' => $weather
        ]);
    }

    public function cities(Request $request)
    {
        $cities = Http::get('https://api.meteo-concept.com/api/location/cities?token=' . env("METEO_TOKEN_SUPER") . '&search=' . $request->city)->json();

        return view('weather.cities')->with([
            'cities' => $cities
        ]);
    }
}
