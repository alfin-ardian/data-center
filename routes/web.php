<?php

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

// $router->group(['prefix' => 'user'], function () use ($router) {
//     $router->get('/',  ['uses' => 'UserController@list']);
//     $router->get('/{id}', ['uses' => 'UserController@show']);
//     $router->post('upload_logo', 'UserController@uploadLogo');
//     $router->post('create', ['uses' => 'UserController@create']);
//     $router->post('update/{id}', ['uses' => 'UserController@update']);
//     $router->delete('/{id}', ['uses' => 'UserController@delete']);
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
