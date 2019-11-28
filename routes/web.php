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
    return view('welcome');
});

// Route::get('/todos', function () {
//     return view('todos');
// });

// Route::view('/todos', 'todos');

// Route::get('todos/{name?}', function ($name = null) {
//     return $name;
// });

// Route::get('todos/{name?}', function ($name = 'John') {
//     return $name;
// })->where('name', 'Steve');

Route::get('/todos', function () {
    $data = [
        "name" => "Nigel",
        "email" => "nigel@test.com",
        "location" => "Nairobi",
        "lastName" => "Ennis",
    ];
    return view('todos')->with("data", $data);
});

// Route::get('/todos', function()
// {
//     return view('todos');
// });

/**
 * 
Route::get('/todos', 'TodosController@index');

Route::get('/todos/create', 'TodosController@create');

Route::post('/todos', 'TodosController@store');

Route::get('/todos/{todos}', 'TodosController@show');

Route::get('/todos/{todos}/edit', 'TodosController@edit');

Route::patch('/todos/{todos}', 'TodosController@update');

Route::delete('/todo/{todos}', 'TodosController@destroy');
 */