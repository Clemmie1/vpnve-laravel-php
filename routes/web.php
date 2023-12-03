<?php

use Acamposm\Ping\Ping;
use Acamposm\Ping\PingCommandBuilder;
use App\Models\VpnKey;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use OutlineApiClient\OutlineApiClient;
use OutlineApiClient\OutlineKey;

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

Route::group(['middleware' => 'checkAuth'], function (){
    Route::get('/auth/login', function () {
        return view('Auth.Login');
    })->name('auth.login');

    Route::get('/auth/register', function () {
        return view('Auth.Register');
    })->name('auth.register');
});

Route::get('/auth/logout', function () {
    if (Auth::check()){
        Auth::logout();
    }
    return redirect(\route('auth.login'));
})->name('auth.logout');

Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('/server-list', function () {
    return view('Pages.ServerList');
})->name('page.server-list');

Route::get('/download', function () {
    return view('Pages.Download');
})->name('page.download');



Route::group(['middleware' => ['auth']], function (){
    Route::get('/dashboard', function () {
        return view('Dashboard.HomeAndMyKeys');
    })->name('dashboard.home');

    Route::get('/dashboard/api', function () {
        return view('Dashboard.HomeAndApiKeys');
    })->name('dashboard.api');

    Route::get('/test', function (){

        $get = VpnKey::query()->find(1);

        if ($get){
            $get->delete();
        } else {
            return 'notFound';
        }

    });
});
