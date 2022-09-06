<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TipoController;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome xdxd');
});
Route::get('/hola', function () {
    return ('hola');
});
//Route::resource('tipo', 'TipoController');
Route::resource('tipo', 'TipoController',
                ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('rol', 'RolController',
                ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('empleado', 'EmpleadoController',
                ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('marcaje', 'MarcajeController',
                ['only' => ['index', 'store', 'update', 'destroy', 'show']]);