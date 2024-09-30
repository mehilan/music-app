<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use App\Http\Controllers\ArtistController;

class MusicController extends Controller
{
    public function index()
    {
        // $get_artist = Http::withToken(config('services.spotify_token.access_token'))->get("https://api.spotify.com/v1/artists/4zCH9qm4R2DADamUHMCa6O");


        // dump($get_artist->json());
        // return view("index");

        // $artist = new Art
    }

    public function search(Request $request)
    {
        $search = Http::withToken(config('services.spotify_token.access_token'))->get("https://api.spotify.com/v1/search?q=aniruth&type=artist,track");

        dump($search->json());
        // $q = $request->query('q')
        // $type = $request->query('type');
        // dd("Query:".$q."Type:".$type);

    }
}
