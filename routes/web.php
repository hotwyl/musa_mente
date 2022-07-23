<?php

use App\Http\Controllers\TesteController;
use App\Mail\NewTest;
use Illuminate\Support\Facades\Mail;
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

Route::controller(TesteController::class)->group(function () {

    Route::get('/fakers', 'fake')->name('fake');

    Route::get('/', 'index')->name('cliente.index');

    Route::post('/', 'store')->name('cliente.store');

    Route::prefix('admin')->group(function(){
        Route::get('/', 'admin')->name('admin')/*->middleware('auth')*/;
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'logar')->name('logar');
        Route::get('/logout', 'logout')->name('logout');
    });


    Route::get('/{chave}/{protocolo}', 'show')->name('cliente.show');
});

Route::fallback(function ($err) {

    return view("404");
});
