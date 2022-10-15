<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NotificationController;


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


Auth::routes(['verify' => true]);
Route::redirect('/', '/auth/login');

// Authentication  Route
Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [AuthenticationController::class, 'loginPage'])->name('auth-login');
    Route::post('login', [AuthenticationController::class, 'login'])->name('login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/',
        [DashboardController::class, 'dashboardEcommerce'])->name('dashboard-ecommerce')->middleware('verified');
    Route::get('/', [DashboardController::class, 'dashboardEcommerce'])->name('dashboard-ecommerce');
    Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');


// page Route
    Route::group(['prefix' => 'page'], function () {
        Route::resource('notifications',NotificationController::class);
    });


// locale Route
    Route::get('lang/{locale}', [LanguageController::class, 'swap'])->name('lang-locale');

    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
