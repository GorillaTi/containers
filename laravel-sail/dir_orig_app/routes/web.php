<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IPController;
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
Route::get('/mostrar-ip', [IPController::class, 'showIP']);
//Route::get('/mostrar-ip', 'IPController@showIP');
//Route::get('/mostrar-ip', function (){
//    return "helow";
//});
