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

Route::group(['middleware' => ['isAdmin','auth']],function(){
    Route::get('/admin/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/dashboard/users',[App\Http\Livewire\Admin\ShowUsers::class,'render']);
    Route::get('/admin/dashboard/users/new',[App\Http\Livewire\Admin\NewUser::class,'render']);
    Route::delete('/admin/dashboard/users/{id}/delete',[App\Http\Controllers\UsersController::class,'destroy']);
    Route::post('/admin/dashboard/users/new',[App\Http\Controllers\Adm\UserController::class,'index']);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
