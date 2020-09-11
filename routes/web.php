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
    return view('welcome');
});

Route::get('/sklep', function(){
   return view('sklep');
});

Route::get('/kontakt', function(){
   return view('kontakt');
});

Route::get('/zaloguj', function (){
   return view('zaloguj');
});

Route::get('/odzyskaj_haslo', function (){
   return view('odzyskaj_haslo');
});

Route::get('/rejestracja', function (){
   return view('rejestracja');
});

Route::get('/koszyk', function (){
   return view('koszyk');
});

Route::get('/produkt', function(){
   return view('produkt');
});

Route::get('/profil', function (){
   return view('profil');
});
