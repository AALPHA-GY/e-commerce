<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MainPageController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('login', [ApiController::class, 'login']);
//Route::post('register', [ApiController::class, 'register']);
Route::get('get_main_page', [MainPageController::class, 'index']);

Route::group(['middleware' => ['auth:api']], function() {
    Route::get('logout', [ApiController::class, 'logout']);
    Route::get('get_user', [ApiController::class, 'get_user']);
    Route::post('send_mail', [DocumentController::class, 'sendMail']);
    Route::get('get_document', [DocumentController::class, 'getDocument']);
    Route::get('get_document_name/{id}',[DocumentController::class, 'getDocumentName']);
    Route::get('get_users', [UsersController::class, 'getUsers']);
    Route::post('send_push',[UsersController::class, 'sendPushD']);
    Route::get('get_main_detail/{mainPage}', [MainPageController::class, 'show']);
});
