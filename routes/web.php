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
    return view('welcome');
});
Route::get('/produk' , function () {
    $q=App\produk::all();
    $w=App\pengguna::all();
    $s=App\pengaturan::all();
    return $q . '<br><br>' . $w . '<br><br>' . $s;
});

Route::get('/pengguna', function () {
    $q=App\pengguna::all();
    return $q;
});


Route::get('/pengaturan', function () {
    $q=App\pengaturan::all();
    return $q;
});


Route::get('/test','Mycontroller@percobaan');
Route::get('/test2','Mycontroller@percobaan2');
Route::get('/test3','Mycontroller@percobaan3');
Route::get('/test4','Mycontroller@percobaan4');
Route::get('/test5','Mycontroller@percobaan5');
Route::get('/test6','Mycontroller@percobaan6');
Route::get('/test7','Mycontroller@percobaan7');
Route::get('user/{buah}','Mycontroller@show');

