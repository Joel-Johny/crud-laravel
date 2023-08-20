<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\page1;
use App\Http\Controllers\page2;
use App\Http\Controllers\Formsubmit;
use App\Http\Middleware\balance;

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
    return view('welcome');
});

// Route::get('/page1', function () {
//     return view('page1');
// });
// Route::get('/page1','page1@index' );old way
Route::get('/page1', [page1::class,'index'])->middleware('balance');
Route::get('/page2', [Page2::class,'index']);

Route::view('/simpleForm','form1');
Route::post('/formSubmit', [Formsubmit::class,'index']);

Route::view('deny','deny');

