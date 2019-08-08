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
// Route::get('/', function () {
//     return view('Book.biblioteca');
// });

Route::get('/info', function () {
    return view('base.info');
});
Route::get('/inicio', 'DashboardController@index');
Route::resource('/books', 'BookController');
Route::resource('/users', 'UserController');
Route::resource('/reserves', 'ReserveController');
Route::resource('/categories', 'CategoryController');
Route::get('/users/{id}/confirmDelete', 'UserController@confirmDelete');
Route::get('/reserves/{id}/confirmDelete', 'ReserveController@confirmDelete');
Route::get('/books/{id}/confirmDelete', 'BookController@confirmDelete');
Route::get('/categories/{id}/confirmDelete', 'CategoryController@confirmDelete');
Route::get('/reserves/create/{id}', 'BookController@confirm');
Route::get('', 'BookController@biblio');


// Route::get('/inicio', function () {
//     return view('inicio');
// });
// Route::get('/biblioteca', function () {
//     return view('biblioteca');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/reserva', function () {
//     return view('reserva');
// });
// Route::get('/reservas', function () {
//     return view('reservas');
// });
// Route::get('/user', function () {
//     return view('user');
// });
// Route::get('/users', function () {
//     return view('users');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
