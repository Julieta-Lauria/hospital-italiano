<?php

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
    return view('index');
});
Route::get('/drag', function () {
    return view('drag');
});
Route::post('/pdf', function () {
    return view('pdfprint');
});
Route::get("/tabs", function(){
  return view("tabs");
});
