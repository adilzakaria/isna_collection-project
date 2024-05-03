<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\EditAkunController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;

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


// User
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/akun', [AkunController::class, 'akun']);
Route::get('/edit_akun', [EditAkunController::class, 'edit_akun']);
Route::post('/edit_akun', [EditAkunController::class, 'editAkun']);

Route::get('/forgot', [ForgotController::class, 'forgot'])->middleware('guest');
Route::post('/forgot', [ForgotController::class, 'updatePassword']);

Route::get('/order', [OrderController::class, 'order']);
Route::post('/order', [OrderController::class, 'pesan'])->name('pesan');
Route::get('/pesanan', [OrderController::class, 'showPesanan']);
Route::get('/detail/{nomor}', [DetailController::class, 'show'])->name('detail');
// Route::get('/pembayaran', function () {
//     return view('frontend.pembayaran');
// });


// admin
Route::middleware('admin')->group(function () {
    Route::get('/dash', [AdminController::class, 'admin'])->name('admin');
    Route::get('/dash/buatkatalog', [AdminController::class, 'buatkatalog'])->name('buat_katalog');
    Route::post('/dash/buatkatalog', [AdminController::class, 'simpankatalog'])->name('simpan_katalog');
    Route::get('/dash/editkatalog/{katalog}', [AdminController::class, 'editkatalog'])->name('edit_katalog');
    Route::patch('/admin/updatekatalog/{katalog}', [AdminController::class, 'updatekatalog'])->name('update_katalog');
    Route::get('/admin/hapuskatalog/{katalog}', [AdminController::class, 'hapuskatalog'])->name('hapus_katalog');
    Route::delete('/admin/hapuskatalog/{katalog}', [AdminController::class, 'destroykatalog'])->name('destroy_katalog');

    Route::get('/admin/hapusulasan/{ulasan}', [AdminController::class, 'hapusulasan'])->name('hapus_ulasan');
    Route::delete('/admin/hapusulasan/{ulasan}', [AdminController::class, 'destroyulasan'])->name('destroy_ulasan');
    Route::get('/dash/ulasan', [AdminController::class, 'adminulasan'])->name('admin_ulasan');
    Route::get('/dash/katalog', [AdminController::class, 'adminkatalog'])->name('admin_katalog');

    Route::get('/dash/pesanan', [AdminController::class, 'adminpesanan'])->name('admin_pesanan');
    Route::get('/dash/detailpesanan/{pesanan}', [AdminController::class, 'editpesanan'])->name('status_pesanan_admin');
    Route::patch('/dash/updatepesanan/{pesanan}', [AdminController::class, 'updatestatuspesanan'])->name('update_status_pesanan_admin');

});

Route::get('/order-admin', function () {
    return view('admin.order');
});

Route::post('review-kami', 'ReviewController@reviewStore')->name('review.store');

Route::get('/test', function () {
    return view('frontend.review');
});
