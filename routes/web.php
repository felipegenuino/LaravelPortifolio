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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {

  $tasks = [
    'Contar uma historia',
    'Terminar um trabalho',
    'Limpar a casa'
  ];

  $name = 'Felipe Genuino';
  $about = 'Eu moro em florianopolis, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $age = 33;

     return view('about', compact('name', 'about', 'age', 'tasks'));
});

Route::get('/works', function () {
    return view('works');
});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
