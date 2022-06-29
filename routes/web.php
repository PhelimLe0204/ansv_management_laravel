<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

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

Route::middleware('login.user')->prefix('/')->group(function () {
    Route::get('/', [User\HomeController::class, 'index'])->name('user.dashboard');

    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [User\HomeController::class, 'index'])->name('user.dashboard');
        Route::get('/detail', [User\ProjectController::class, 'detail'])->name('project.detail');
        Route::post('/detail', [User\ProjectController::class, 'update_from_detail'])->name('project.update_from_detail');
    });

    Route::get('/customer', [User\CustomerController::class, 'index'])->name('user.customer');

    Route::get('pic',[User\PicController::class, 'index'])->name('user.pic');
});

Route::get('/secure', [User\LoginController::class, 'login_index'])->name('user.login');

Route::post('/secure', [User\LoginController::class, 'login_processing']);

Route::get('/logout', [User\LoginController::class, 'logout'])->name('user.logout');

Route::get('/test_loadgo', [User\HomeController::class, 'test_loadgo']);

Route::get('/test', function () {
    return view('user.tiny_demo');
    // return \App\Models\User::find(1)->userRoles;
});

Route::middleware('testchecklogin')->prefix('demo')->group(function () {
    Route::get('/', [User\TestController::class, 'index']);

    Route::get('/abc', [User\TestController::class, 'index'])->middleware('testmiddleware');

    Route::get('/test', function () {
        return view('user.tiny_demo');
    });
});
