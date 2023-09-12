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
    return redirect('/home');
});
Route::get('/home', function () {
    return view('home');
}); 
Route::get('/news', function () {
    return view('news');
}); 

Route::get('/proker', function () {
    return view('proker');
}); 

Route::get('/team', function () {
    return view('team');
}); 

Route::get('/portfolio', function () {
    return view('portfolio');
}); 

Route::get('/about', function () {
    return view('about');
}); 

Route::get('/join', function () {
    return view('join');
}); 

