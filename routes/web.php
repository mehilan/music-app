<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\SpotifyController;
use App\Http\Controllers\ArtistController;





Route::get('/accesstoken', [SpotifyController::class,'getAccessToken'])->name('/');

Route::get('test', [ArtistController::class,'test'])->name('/');
Route::get('search', [ArtistController::class,'searchArtist'])->name('search');

Route::get('/', [ArtistController::class,'newReleases']);

// Route::view('/', 'index');
Route::get('show/{id}/', [ArtistController::class, 'getAlbum'])
->name('show');

