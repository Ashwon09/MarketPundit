<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PhotoController;
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

Route::get('/', [HomepageController::class, 'index'])->name('index');

Route::get('/news/{id}', [HomepageController::class, 'statusView'])->name('statusView');

Route::get('/viewAll', [HomepageController::class, 'viewAll'])->name('viewAll');

Route::get('/ViewPhoto', [HomepageController::class, 'ViewPhoto'])->name('ViewPhoto');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth'],'middleware' => 'admin'], function () {

    Route::group(['as' => 'status.', 'prefix' => 'status'], function () {
        Route::get('/index', [StatusController::class, 'index'])->name('index');
        Route::get('/create', [StatusController::class, 'create'])->name('create');
        Route::post('/store', [StatusController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [StatusController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [StatusController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [StatusController::class, 'destroy'])->name('delete');
    });

    Route::group(['as' => 'photo.', 'prefix' => 'photo'], function () {
        Route::get('/index', [PhotoController::class, 'index'])->name('index');
        Route::get('/create', [PhotoController::class, 'create'])->name('create');
        Route::post('/store', [PhotoController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PhotoController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [PhotoController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [PhotoController::class, 'destroy'])->name('delete');
    });

    

});
