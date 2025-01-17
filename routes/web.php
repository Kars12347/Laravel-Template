<?php

use App\Http\Controllers\Lumi;
use App\Http\Controllers\Rafa;
use App\Http\Controllers\Ariq;
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
    return view('index');
});

Route::get('/lumi', [Lumi::class, 'lumi']);

Route::get('/rafa', [Rafa::class, 'rafa']);

Route::get('/ariqs', [Ariq::class, 'ariq']);