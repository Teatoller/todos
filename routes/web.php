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

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * get('/todos', 'TodosController@index');
 * get('/todos/create', 'TodosController@create');
 * post('/todos', 'TodosController@store');
 * get('/todos/{id}', 'TodosController@show');
 * get('/todos/{todos}/edit', 'TodosController@edit');
 * patch('/todos/{todos}', 'TodosController@update');
 * delete('/todo/{todos}', 'TodosController@destroy');

 */

Route::resource('todos', 'TodosController');

/**
 * This route is to test on browser if the db is connected successfully
 */
// Route::get('/db', function () {
//     return DB::select('select database();');
// });

/**
 * Playing about with db connection
 */

 /**
  * Show tables in db
  */

// Route::get('/db', function () {
//     return DB::select('show tables;');
// });


/**
 * Insert records and return db
 */
// Route::get('/db', function () {
//     DB::table('todo_list')
//     ->insert(
//         [
//             'name' => 'Fay', 
//             'Last_name' => 'Wendy'
//             ]
//         );
//     return DB::table('todo_list')->get();
// });

/**
 * Get records in db
 */

Route::get('/db', function () {
    $results = DB::table('todo_list')->where('name','Nigel')->first();
    return $results->last_name;
});

