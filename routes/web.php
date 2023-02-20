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
    $comicard = config('comics');
    return view('comics', compact('comicard'));
}) ->name('comicard');

Route::get('/comic/{title}', function($title){
    $comics = config('comics');

    foreach($comics as $comic){
        if($comic['title'] == $title){
            $single = $comic;
        }
    }

    return view('singlecomic', compact('single'));

}) ->name('singlecomic');
