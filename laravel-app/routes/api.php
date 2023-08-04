<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([
    'prefix' => 'user_route'
],function(){
    Route::get('me',[UserController::class, 'get_me']);
    Route::post('register_new_user',[UserController::class, 'register_user']);
    Route::put('update_user_by_id',[UserController::class, 'update_user']);
    Route::delete('delete_user_by_id',[UserController::class, 'delete_user']);
    Route::post('login_user_by_id',[UserController::class, 'login_user']);
    Route::group(['middleware' =>'auth:sanctum'],function(){
        Route::get('get_all_user',[UserController::class, 'get_users']);
    

    });
   
}
);
Route::put('/put',[UserController::class, 'update_user']);
Route::delete('/delete',[UserController::class, 'delete_user']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}
);
