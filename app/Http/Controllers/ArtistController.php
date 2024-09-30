<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class ArtistController extends SpotifyController
{

    public function getArtistIds($query)
    {
        $client = new Client();
        $response = $client->get('https://api.spotify.com/v1/search', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->getAccessToken(),
            ],
            'query'=> [
                'q'=> $query,
                'type'=> 'artist',
                'limit'=>50,
            ],

        ]);

        $body = json_decode($response->getBody()->getContents(), true);

        $artistdetails = [];

        foreach ($body['artists']['items'] as $artist) {
            $artistdetails[] = ['id' => $artist['id'], 'name'=> $artist['name']];
        }

        return dd($artistdetails);
    }

    public function searchArtist(Request $request)
    {
        $query = $request->input('q');
        $artistIds = $this->getArtistIds($query);

        return response()->json($artistIds);
    }

    public function newReleases()
    {

        $client = new Client();
        $response = $client->get('https://api.spotify.com/v1/browse/new-releases',[
            'headers' => [
                'Authorization' => 'Bearer ' . $this->getAccessToken(),
            ],
            'query'=> [
                'limit' => 50,
                'offset' => 5,
            ]
        ]);

        $newReleases = json_decode($response->getBody()->getContents(), true);

        $new_Release = [];
        foreach ($newReleases['albums']['items'] as $newRelease) {
            $new_Release[] = $newRelease;
        }

        dump($new_Release);

        return view('index', [
            'newRelease' => $new_Release,
        ]);


    }

    public function getAlbum($id)
    {

        $client = new Client();
        $response = $client->get('https://api.spotify.com/v1/albums/',[
            'headers' => [
                'Authorization' => 'Bearer ' . $this->getAccessToken(),
            ],
            'query' => [
                'ids' => $id,
                'market' => 'IN',
            ]
        ]);

        $get_album = json_decode($response->getBody()->getContents(), true);

        foreach ($get_album['albums'] as $getAblum) {
            # code...
            $get_album = $getAblum;
        }

        dump($get_album);

        return view('show', [
            'getAlbum' => $get_album,
        ]);
    }

}
