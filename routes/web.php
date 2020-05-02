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

Route::get('/pruebas', function(){
    $ticket = App\Ticket::findOrFail(1);
    foreach($ticket->products as $product){
        echo $product->pivot->name.'<br>';
    }
    
    die;
});

Route::get('/login', 'Auth\LoginController@index')->name('login');

// Route::get('create/{name}/{email}/{password}', 'Auth\RegisterController@createByURL');

Route::post('/authenticate', 'Auth\LoginController@authenticate')->name('authenticate');