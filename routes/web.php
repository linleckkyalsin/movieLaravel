<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\GenreController;
use App\Models\Anime;
use App\Models\Category;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::group(['prefix'=>'admin'], function() {
Route::get('/admin/login', [AuthController::class,'getlogin']);
Route::post('/admin/login', [AuthController::class,'postlogin']);
Route::get('/admin/logout',[AuthController::class,'logout']);
// });

Route::group(['prefix'=>'admin'],function(){
    Route::get('/',[AdminController::class,'home'])->name('home');
    Route::resource('category', CateController::class);
    Route::resource('anime', AnimeController::class);
    Route::resource('actor',ActorController::class);
    Route::resource('genre',GenreController::class);
    Route::resource('episode',EpisodeController::class);
    Route::resource('director',DirectorController::class);
});
