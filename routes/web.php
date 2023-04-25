<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

Auth::routes();

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/login', function(){
    return view('login');
})->name('login');


Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('savelogin');


Route::middleware(['auth', 'user-role:1'])->group(function(){
    Route::get('/admindashboard', [HomeController::class, 'admin'])->name('admin.dashboard');
});

Route::middleware(['auth', 'user-role:2'])->group(function(){
    Route::get('/kurirdashboard', [HomeController::class, 'kurir'])->name('kurir.dashboard');
});

Route::middleware(['auth', 'user-role:3'])->group(function(){
    Route::get('/userdashboard', [HomeController::class, 'user'])->name('user.dashboard');
});


//Route Admin
//Feature menambahkan user dan melihat user
Route::get('/manageuser', 'App\Http\Controllers\UserController@index')->middleware(['auth', 'user-role:1'])->name('manageuser');

//Route untuk get and post buat tambah user
Route::get('/adduser', function(){
    return view('adminroute.adduserpage');
})->middleware(['auth', 'user-role:1']) ->name('adduser');

Route::post('/admindashboard/saveuser', 'App\Http\Controllers\UserController@store')->name('saveuser');

//Route Delete
Route::delete('/adminroute.viewuserpage{user}', 'App\Http\Controllers\UserController@destroy')->middleware(['auth', 'user-role:1']) ->name('deleteuser');
