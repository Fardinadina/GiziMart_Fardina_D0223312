<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';
Route::middleware('auth', 'admin')->group(function(){
Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/lihatuser',[AdminController::class, 'lihatUser'])->name('admin.lihatuser');
Route::get('/admin/tambahuser',[AdminController::class, 'tambahUser'])->name('admin.tambahuser');
Route::get('/admin/edituser', [AdminController::class, 'editUser'])->name('admin.edituser');
Route::post('/admin/simpanuser', [AdminController::class, 'simpanUser'])->name('admin.simpanuser');
Route::post('/admin/updateuser/{id}', [AdminController::class, 'updateUser'])->name('admin.updateuser');
Route::post('/admin/hapususer/{id}', [AdminController::class, 'hapusUser'])->name('admin.hapususer');
Route::get('/admin/lihatkategori',[AdminController::class, 'lihatKategori'])->name('admin.lihatkategori');
Route::get('/admin/lihatproduk',[AdminController::class, 'lihatProduk'])->name('admin.lihatproduk');
Route::get('/admin/lihatpesanan',[AdminController::class, 'lihatPesanan'])->name('admin.lihatpesanan');
Route::get('/admin/lihatulasan',[AdminController::class, 'lihatUlasan'])->name('admin.lihatulasan');

});
