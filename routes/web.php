<?php

use App\Http\Controllers\AuthCtrl;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts.main');
})->middleware('auth');

// Route::get('/', [AuthCtrl::class, 'index']);
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthCtrl::class, 'register']);

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthCtrl::class, 'login']);

Route::post('/logout', [AuthCtrl::class, 'logout']);

Route::get('/test', function () {
    return view('test');
});

