<?php

use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {

    Route::group(['as' => 'status.', 'prefix' => 'status'], function () {
        Route::get('/index', [StatusController::class, 'index'])->name('index');
        Route::get('/create', [StatusController::class, 'create'])->name('create');
        Route::post('/store', [StatusController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [StatusController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [StatusController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [StatusController::class, 'destroy'])->name('delete');
    });

    

});
