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


Route::get("/",[\App\Http\Controllers\HomeController::class,"index"]);
Route::get("/redirects",[\App\Http\Controllers\HomeController::class,"redirects"]);

Route::get("/users",[\App\Http\Controllers\AdminController::class,"user"])->name("users");
Route::get("/deleteuser/{id}",[\App\Http\Controllers\AdminController::class,"deleteuser"]);

Route::get("/drinkmenu",[\App\Http\Controllers\AdminController::class,"drinkmenu"]);
Route::post("/uploaddrink",[\App\Http\Controllers\AdminController::class,"upload"]);
Route::get("/deletemenu/{id}",[\App\Http\Controllers\AdminController::class,"deletemenu"]);

Route::get("/updateview/{id}",[\App\Http\Controllers\AdminController::class,"updateview"]);
Route::post("/update/{id}",[\App\Http\Controllers\AdminController::class,"update"]);


Route::post("/reservation",[\App\Http\Controllers\AdminController::class,"reservation"]);
Route::get("/viewreservation",[\App\Http\Controllers\AdminController::class,"viewreservation"]);

Route::get("/viewchef",[\App\Http\Controllers\AdminController::class,"viewchef"]);
Route::post("/uploadchef",[\App\Http\Controllers\AdminController::class,"uploadchef"]);
Route::get("/updatechef/{id}",[\App\Http\Controllers\AdminController::class,"updatechef"]);
Route::post("/updatedrinkchef/{id}",[\App\Http\Controllers\AdminController::class,"updatedrinkchef"]);
Route::get("/deletechef/{id}",[\App\Http\Controllers\AdminController::class,"deletechef"]);

Route::post("/addcart/{id}",[\App\Http\Controllers\HomeController::class,"addcart"]);
Route::get("/showcart/{id}",[\App\Http\Controllers\HomeController::class,"showcart"]);
Route::get("/remove/{id}",[\App\Http\Controllers\HomeController::class,"remove"]);

Route::post("/orderconfirm",[\App\Http\Controllers\HomeController::class,"orderconfirm"]);

Route::get("/orders",[\App\Http\Controllers\AdminController::class,"orders"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
