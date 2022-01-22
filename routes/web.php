<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cliente;


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

Route::get('/cliente', [cliente::class, 'create']);

Route::post('/cliente',[cliente::class, 'store']);
