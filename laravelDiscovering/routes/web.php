<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanckController;

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
Route::get('/index', [BanckController::class, 'index'] );

##################### Chamadas de Views ##################
Route::get('/', function () {return view('dashboard');});
Route::get('/registerMateriais', function () {return view('materiais');});
Route::get('/register', function () {return view('register');});


##################### Materiais #########################
Route::post('/materiais', [BanckController::class, 'create'] );




##################### Bancos #########################
Route::post('/banco', [BanckController::class, 'store'] );



