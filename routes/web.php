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
    $fileName = "14042021-mariaFGil.jpg";
    return view('index',[
        "fileName" => $fileName
    ]);
})->name('index');

Route::get('/download', function () {
    return Storage::download('public/14042021-mariaFGil.jpg');
})->name('download');

/* Route::get('/view', function () {
    $url = config('app.url').Storage::url('public/14042021-mariaFGil.jpg');
    
    return view('view',[
        "url" => $url
    ]);
}); */