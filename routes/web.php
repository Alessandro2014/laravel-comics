<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   
    return view('home');
})->name('home');

Route::get('/comics', function () {
    
    $comics = config('comics');
    return view('links.comics', compact('comics'));
})->name('comics');

Route::get('/characters', function () {
    return view('links.characters');
})->name('characters');

Route::get('/movies', function () {
    return view('links.movies');
})->name('movies');

Route::get('/tv', function () {
    return view('links.tv');
})->name('tv');

Route::get('/games', function () {
    return view('links.games');
})->name('games');

Route::get('/collectibles', function () {
    return view('links.collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('links.videos');
})->name('videos');

Route::get('/fans', function () {
    return view('links.fans');
})->name('fans');

Route::get('/news', function () {
    return view('links.news');
})->name('news');

Route::get('/shop', function () {
    return view('links.shop');
})->name('shop');

// SINGOLO COMIC
Route::get('/comic', function () {
    $comics = config('comics');
    $comic = $comics[1];

    return view('layouts.comic', compact('comic'));
})->name('comic');