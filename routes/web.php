<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\EditAkunController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class,'index']);
Route::get('/home', [HomeController::class,'home'])->middleware('auth');

Route::get('/login', [LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/akun', [AkunController::class, 'akun']);
Route::get('/edit_akun', [EditAkunController::class, 'edit_akun']);

Route::get('/forgot', [ForgotController::class, 'forgot']);

Route::get('/order', [OrderController::class, 'order']);
Route::get('/dash',[AdminController::class, 'showDash']);
Route::get('/form',[AdminController::class, 'showForm']);
Route::get('/pesanan', function(){return view('frontend.pesanan');});
