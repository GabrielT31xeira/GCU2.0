<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\Register\RegisterController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Adm\AdminController;


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

Route::get('/admin/dashboard',[AdminController::class, 'index']);
// Route::group(['prefix' => 'Adm','middleware' => 'auth'],function(){
    // });
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    // Route::get('/login',[PagesController::class, 'login']);
    // Route::get('/register',[PagesController::class, 'register']);
    
    // Route::post('/login',[LoginController::class, 'login'])->name('login');
    // Route::post('/register',[RegisterController::class, 'createUser'])->name('register');