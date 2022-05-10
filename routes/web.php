<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login_con;
use App\Http\Controllers\register_con;
use App\Http\Controllers\display;
use App\Http\Controllers\http_request;
use GuzzleHttp\Middleware;
use Illuminate\Routing\Route as RoutingRoute;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home');
});
Route::post("register",[register_con::class,"display"]);
Route::view("register","register");
Route::POST("login",[login_con::class,"declare"]);
Route::view("login","login");
Route::view("home","home"); 

#display table data using controller

#Route::get("dashboard",[display::class,"tbl"]);
Route::get("api",[http_request::class,"check"]);
Route::view("gallary","gallary");

#group middleware
// Route::group(['middleware'=>['group']],function(){
//     Route::view('dashboard','files.dashboard');
//     Route::view('login','login');
// });

# route middleware
