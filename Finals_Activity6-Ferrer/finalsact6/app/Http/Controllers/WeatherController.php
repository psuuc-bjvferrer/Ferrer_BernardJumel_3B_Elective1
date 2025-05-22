<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeather(Request $request, $city = 'London')
    {
        $apiKey = env('OPENWEATHER_API_KEY');
        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            'q' => $city,
            'appid' => $apiKey,
            'units' => 'metric', // For Celsius
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $weather = [
                'city' => $data['name'],
                'temperature' => $data['main']['temp'],
                'description' => $data['weather'][0]['description'],
                'humidity' => $data['main']['humidity'],
            ];

            // For single city, return JSON or view
            if ($request->expectsJson()) {
                return response()->json($weather);
            }

            return view('weather', ['weather' => [$weather]]);
        }

        return response()->json(['error' => 'Unable to fetch weather data'], 500);
    }

    public function getMultipleCitiesWeather()
    {
        $cities = ['London', 'Dubai', 'Tokyo']; // Example cities
        $apiKey = env('OPENWEATHER_API_KEY');
        $weatherData = [];

        foreach ($cities as $city) {
            $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
                'q' => $city,
                'appid' => $apiKey,
                'units' => 'metric',
            ]);

            if ($response->successful()) {
                $data = $response->json();
                $weatherData[] = [
                    'city' => $data['name'],
                    'temperature' => $data['main']['temp'],
                    'description' => $data['weather'][0]['description'],
                    'humidity' => $data['main']['humidity'],
                ];
            }
        }

        return view('weather', ['weather' => $weatherData]);
    }
}
