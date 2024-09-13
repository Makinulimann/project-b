<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AdminController;

Route::get('/', [PageController::class,'index'])->name('index');
Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
Route::post('/register', [AuthController::class, 'Register'])->name('register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profil', [ProfilController::class, 'showProfil'])->name('profil');
    Route::post('/profil/edit', [ProfilController::class, 'editProfil'])->name('profil.edit');
    Route::get('/kelas/{id}', [PageController::class, 'showKelas'])->name('kelas');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admindashboard', [PageController::class, 'admin'])->name('admindashboard');
    
    Route::get('/admin/settings/akun', [AdminController::class, 'akun'])->name('admin.settings.akun');
    Route::get('/admin/settings/akun/create', [AdminController::class, 'buatAkun'])->name('admin.setting.buatAkun');
    Route::post('/admin/settings/akun', [AdminController::class, 'storeAkun'])->name('storeAkun');
    Route::delete('/admin/settings/akun/{id}', [AdminController::class, 'destroyAkun'])->name('destroyAkun');
    Route::get('/admin/settings/akun/{id}/edit', [AdminController::class, 'editAkun'])->name('admin.setting.editAkun');
    Route::put('/admin/settings/akun/{id}', [AdminController::class, 'updateAkun'])->name('updateAkun');

    Route::get('/admin/settings/kelas', [AdminController::class, 'kelas'])->name('kelas');
    Route::get('/admin/settings/kelas/create', [AdminController::class, 'buatKelas'])->name('buatKelas');
    Route::post('/admin/settings/kelas', [AdminController::class, 'storeKelas'])->name('storeKelas');
    Route::delete('/admin/settings/kelas/{id}', [AdminController::class, 'destroyKelas'])->name('destroyKelas');
    Route::get('/admin/settings/kelas/{id}/edit', [AdminController::class, 'editKelas'])->name('editKelas');
    Route::put('/admin/settings/kelas/{id}', [AdminController::class, 'updateKelas'])->name('updateKelas');

    Route::get('/admin/settings/materi', [AdminController::class, 'materi'])->name('materi');
    Route::get('/admin/settings/materi/create', [AdminController::class, 'buatMateri'])->name('buatMateri');
    Route::post('/admin/settings/materi', [AdminController::class, 'storeMateri'])->name('storeMateri');
    Route::delete('/admin/settings/materi/{id}', [AdminController::class, 'destroyMateri'])->name('destroyMateri');
    Route::get('/admin/settings/materi/{id}/edit', [AdminController::class, 'editMateri'])->name('editMateri');
    Route::put('/admin/settings/materi/{id}', [AdminController::class, 'updateMateri'])->name('updateMateri');
});