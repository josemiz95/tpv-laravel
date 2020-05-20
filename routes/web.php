<?php

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

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('home');

// RUTA DE PRUEBAS //
Route::get('/pruebas', function(){
    $ticket = App\Ticket::findOrFail(1);
    foreach($ticket->products as $product){
        echo $product->pivot->name.'<br>';
    }
    
    die;
});

// RUTAS DE SESIONES //

Route::get('/login', 'Auth\LoginController@index')->name('login');
// Route::get('create/{name}/{email}/{password}', 'Auth\RegisterController@createByURL');
Route::post('/authenticate', 'Auth\LoginController@authenticate')->name('authenticate');

// RUTAS DE GESTION  DE USUARIOS //

Route::prefix('/users')->group(function(){
    Route::get('/', 'UsersController@index')->name('usersList');
    Route::get('crear', 'UsersController@create')->name('usersCreate');
    Route::post('guardar', 'UsersController@store')->name('usersStore');
    Route::get('editar/{id}', 'UsersController@edit')->name('usersEdit');
    Route::post('guardar', 'UsersController@update')->name('usersUpdate');
});