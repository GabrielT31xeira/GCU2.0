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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'Adm','middleware' => ['isAdmin','auth']],function(){
    Route::get('/admin/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
});
    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    