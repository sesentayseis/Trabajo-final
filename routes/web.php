<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tareas;
use App\Models\User;
use App\Models\SubTareas;
use App\Models\Paginas;
use App\Models\listas;
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
Route::get('/users', function () {
    return User::All();
});
Route::get('/tareas', function () {
    return Tareas::All();
});
Route::get('/sub_tareas', function () {
    return SubTareas::All();
});
Route::get('/paginas', function () {
    return Paginas::All();
});
Route::get('/listas', function () {
    return listas::All();
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
