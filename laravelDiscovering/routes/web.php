<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanckController;

use App\Http\Controllers\MateriaisController;

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

##################### Dashboard #########################
Route::get('/', function () {return view('dashboard'); } );

##################### Chamadas de Views ##################
//Route::get('/', function () {return view('dashboard');});
Route::get('/registerMateriais', function () {return view('materiais'); } );
Route::get('/register', function () {return view('register');});

##################### Materiais #########################
Route::post('/materiais', [MateriaisController::class, 'create'] );
Route::get('/materiais/{id}', [MateriaisController::class, 'show'] );
Route::get('/materiais/{id}', [MateriaisController::class, 'show'] );
Route::get('delete/{id}', [MateriaisController::class, 'destroy'] );

##################### Bancos #########################
Route::post('/banco', [BanckController::class, 'store'] );	



