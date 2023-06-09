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

// IMPORTO DB
// Route::get('/', function () {
//   $comics = config('comicsdb.comics');
//     return view('homepage', compact('comics'));
// })->name('comics');


Route::get('/', function () {
    $comics = config('comicsdb.comics');
    return view('partials/main',compact('comics'));
})->name('homepage');

Route::get('/characters', function () {
    return view('partials/characters');
})->name('characters');

Route::get('/comics', function () {
    return view('partials/comics');
})->name('comics');

Route::get('/movies', function () {
    return view('partials/movies');
})->name('movies');

Route::get('/tv', function () {
    return view('partials/tv');
})->name('tv');

Route::get('/games', function () {
    return view('partials/games');
})->name('games');

Route::get('/collectibles', function () {
    return view('partials/collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('partials/videos');
})->name('videos');

Route::get('/fans', function () {
    return view('partials/fans');
})->name('fans');

Route::get('/news', function () {
    return view('partials/news');
})->name('news');

Route::get('/shop', function () {
    return view('partials/shop');
});