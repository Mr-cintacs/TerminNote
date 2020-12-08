<?php
namespace App\Http\Controllers;
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
    // return view('hello');
});

Route::get('/user',[UserController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
