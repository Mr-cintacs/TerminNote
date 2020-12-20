<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
// use Illuminate

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
    
    // DB::insert('insert into users (id, name, email, password)
    //             values(?,?,?,?)',[2, 'tavip', 'cocbrainx@gmail.com', bcrypt('123456')]);
    return view('welcome');
});

Route::get('/user',[App\Http\Controllers\UserController::class, 'index']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [App\Http\Controllers\TestController::class, 'index']) ;
Route::get('/testUser', [App\Http\Controllers\TestController::class, 'user']) ;

Route::get('/todo', [App\Http\Controllers\TodoController::class, 'index'])->name('todo.index');
Route::get('/todo/create', [App\Http\Controllers\TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/create', [App\Http\Controllers\TodoController::class, 'store'])->name('todo.store');
Route::get('/todo/edit/{id}', [App\Http\Controllers\TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todo/edit/{id}',[App\Http\Controllers\TodoController::class, 'update'])->name('todo.update');