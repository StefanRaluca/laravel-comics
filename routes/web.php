<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics.list');
    //dd($comics);
    //$comicsCollection = collect($comics);
    return view('comics', compact('comics')); // ['comics' => $comics]
})->name('comics');


Route::get('/comics/{id}', function ($id) {
    abort_unless($id >= 0 && count(config('comics.list')), 404);
    $comic = config('comics.list')[$id];
    return view('comics', compact('comic'));
})->name('comic.show');