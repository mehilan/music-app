<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class SpotifyController extends Controller
{

    private $client_id;
    private $client_secret;

    public function __construct()
    {
        $this->client_id = config('services.spotify_token.client_id');
        $this->client_secret = config('services.spotify_token.client_secret');
    }

    public function getAccessToken()
    {
        $client = new Client();
        $response = $client->post('https://accounts.spotify.com/api/token',[
            'form_params' => [
                'grant_type' => 'client_credentials'
            ],

            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($this->client_id . ':' . $this->client_secret),
            ],
        ]);

        $body = json_decode($response->getBody()->getContents(), true);

        return $body['access_token'];
    }
}
