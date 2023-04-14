<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\idadeController;
use App\Htpp\Controllers\contasController;
use App\Http\Controllers\nameController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Digite o seu nome/{name}', [nameController::class, 'name'])
    ->where('name', '[a-z]{3,50,}$'); 

Route::get('/contas/{numero1}/{numero2}/{operacao?}', [contasController::class, 'operation'])
    ->where(['numero1' => '[0-9]+', 'numero2' => '[0-9]+'])
    ->name('contas');

Route::get('/idade/{ano}/{mes}/{dia}', [idadeController::class, 'age'])
    ->where(['year' => '[0-9]{4}', 'month' => '[0-9]{1,2}', 'day' => '[0-9]{1,2}'])
    ->name('idade');