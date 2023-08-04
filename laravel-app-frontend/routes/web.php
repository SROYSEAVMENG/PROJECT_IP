<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/sproductpage', [UserController::class,'sproductpage'] );
Route::get('/shoppage', [UserController::class,'shoppage'] );
Route::get('/homepage', [UserController::class,'homepage'] );
Route::get('/login', [UserController::class,'loginpage'] );
Route::post('/loginuser', [UserController::class,'login_handle'] );
Route::get('/aboutpage', [UserController::class,'aboutpage'] );
Route::get('/cartpage', [UserController::class,'cartpage'] );
Route::get('/contactpage', [UserController::class,'contactpage'] );
