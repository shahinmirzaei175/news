<?php

use App\Http\Controllers\Web\NewsController;
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
Route::group(['prefix'=>'web','as'=>'web.'], function() {
    Route::get("news", [NewsController::class, 'index'])->name('news.index');
    Route::get("news/{id}", [NewsController::class, 'show'])->name('news.show');
});
