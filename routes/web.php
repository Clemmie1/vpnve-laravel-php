<?php

use Acamposm\Ping\Ping;
use Acamposm\Ping\PingCommandBuilder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('/auth/login', function () {
    return view('Auth.Login');
})->name('auth.login');

Route::get('/auth/register', function () {
    return view('Auth.Register');
})->name('auth.register');

Route::get('/server-list', function () {
    return view('Pages.ServerList');
})->name('page.server-list');
