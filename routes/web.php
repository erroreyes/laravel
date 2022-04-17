<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login_con;

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
Route::POST("login",[login_con::class,"print"]);

Route::view("login","login");
Route::view("home","home"); 
