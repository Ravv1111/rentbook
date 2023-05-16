<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\TransLation\MessageCataLogue;

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

//Route FE
Route::get('/main', function () {return view('layout.main');});
Route::get('/dashboard', function () {return view('dashboard.index');});
//Route::get('/user', function () {
   // return view('dashboard.user');
//});

Route::get('/users', [AdminController::class,'indexUsers'])->name('dashboard.user')->middleware('auth');
Route::get('/books', function () {return view('dashboard.book');});
Route::get('/category', function () {return view('dashboard.category');});
Route::get('/rent-log', function () {return view('dashboard.rent-log');});



//Rpute 
Route::post('/', [MessageController::class,'storeMessage'])->name('storeMessage');

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register/user', [AuthController::class, 'registerAccount'])->name('registerStore');
Route::get('/login',[AuthController::class,'login'])->name('loginIndex');
Route::post('/login/auth', [AuthController::class, 'auth'])->name('login.auth');

Route::get('/user', [AdminController::class, 'indexUsers'])->name('indexUser');
Route::delete('/delete/{id}', [AdminController::class, 'destroy']);
Route::get('/edit/{id}', [AdminController::class,'edit'])->name('edit');
Route::patch('/update/{id}', [AdminController::class,'update'])->name('update');

