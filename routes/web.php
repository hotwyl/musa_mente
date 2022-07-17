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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('envio-email', function () {
    $user = new stdClass();
    $user->name = 'Fulano da Silva';
    $user->email = 'contato@olhavenda.com';
    //return new NewTest($user);
    Mail::send(new NewTest($user));
});

Route::controller(TesteController::class)->group(function () {

    Route::get('/fakers', 'fake')->name('fake');

    Route::get('/', 'index')->name('cliente.index');

    Route::post('/', 'store')->name('cliente.store');

    Route::get('/admin', 'admin')->name('admin');

    Route::get('/{chave}/{protocolo}', 'show')->name('cliente.show');
});

Route::fallback(function ($err) {

    return view("404");
});
