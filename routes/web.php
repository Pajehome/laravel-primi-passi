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

Route::get('great', function () {
    // $data = [
    //     '1' => 'Home',
    //     '2' => 'Jobs',
    //     '3' => 'About us',
    //     '4' => 'Contacti',
    // ];
     return view('great', [
        'ciao' => 'Home',
        // '2' => 'Jobs',
        // '3' => 'About us',
        // '4' => 'Contacti',
    ]);  
      
})->name('great');

