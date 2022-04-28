<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

    $recuperarDados = DB::table('inscritos')->get();

    echo "<pre>";
    var_dump($recuperarDados);
    echo "<pre>";
    
    return view('dashboard', $recuperarDados);
});

Route::get('/nova', 'App\Http\Controllers\RegisterController@listaDadosAction');



