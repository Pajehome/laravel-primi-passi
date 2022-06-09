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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('ciao');
})->name('ciao');

Route::get('/great', function () {
     $data = [
         'lista' => [
            'Home',
            'Jobs',
            'About us',
            'Contacti',
         ]
     ];
     return view('great', $data);  
      
})->name('great');

