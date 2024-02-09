<?php

use Illuminate\Support\Facades\Route;
use Corcel\Model\Post as Model;

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
    $posts = Model::published()->type('post')->get();

    return view('home', ['posts' => $posts]);
});
