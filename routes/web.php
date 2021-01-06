<?php

use App\Events\hello;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;

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

Route::get('/createroom', [RequestController::class, 'createRoom'])->middleware('cors');
Route::get('/joinroom/{channel}', [RequestController::class, 'joinRoom'])->middleware('cors');
