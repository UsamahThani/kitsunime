<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function carousel()
    {
        $response = Http::get("https://api.jikan.moe/v4/recommendations/anime");

        if ($response->successful()) {
            $data = $response->json()['data'];
            shuffle($data);
            return view('welcome', ['recommendations' => array_slice($data, 0, 20)]);
        } else {
            return view('welcome', ['recommendations' => []]);
        }
    }
}
