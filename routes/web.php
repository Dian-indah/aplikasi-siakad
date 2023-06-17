<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('login');

Route::post('/', [LoginController::class, 'authenticate'])->name('auth');


// Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::middleware('auth:siswa')->group(function () {

    Route::get('/menuSiswa', [SiswaController::class, 'index'])->name('menuSiswa');
    Route::get('/nilaiSiswa', [SiswaController::class, 'nilai'])->name('nilaiSiswa');
    Route::get('/kehadiranSiswa', [SiswaController::class, 'kehadiran'])->name('kehadiranSiswa');

});
Route::middleware('auth:admin')->group(function () {

    Route::get('/menuAdmin', [AdminController::class, 'index'])->name('menuAdmin');
    Route::get('/aspirasiAdmin', [AdminController::class, 'aspirasi'])->name('aspirasiAdmin');
    Route::get('/guruAdmin', [AdminController::class, 'guru'])->name('guruAdmin');
    Route::get('/mapelAdmin', [AdminController::class, 'mapel'])->name('mapelAdmin');
    Route::get('/siswaAdmin', [AdminController::class, 'siswa'])->name('siswaAdmin');
    Route::get('/ortuAdmin', [AdminController::class, 'ortu'])->name('ortuAdmin');
    Route::get('/pegawaiAdmin', [AdminController::class, 'pegawai'])->name('pegawaiAdmin');
    Route::get('/siswaAdmin', [AdminController::class, 'siswa'])->name('siswaAdmin');
    Route::get('/kelasSiswaAdmin', [AdminController::class, 'siswa'])->name('kelasSiswaAdmin');
});


// Route::get('/', LandingPageController::class)->name('login');

// // Route::get('/', function () {
// //     return view('Layouts.siakad');
// // });

// Route::get('login', function () {
//     return view('login');
// });

// Route::get('menu', function () {
//     return view('Sisor.menu');
// });

// Route::get('nilai', function () {
//     return view('Sisor.nilai');
// });

// Route::get('kehadiran', function () {
//     return view('Sisor.kehadiran');
// });

// Route::get('aspirasi', function () {
//     return view('Ortu.aspirasi');
// });

// Route::get('guru menu', function () {
//     return view('Pages.menu');
// });

// Route::get('lihat aspirasi', function () {
//     return view('Pages.lihatAspirasi');
// });

// Route::get('guru nilai', function () {
//     return view('Guru.guruNilai');
// });

// Route::get('detail nilai', function () {
//     return view('Guru.detailNilai');
// });

// Route::get('guru kehadiran', function () {
//     return view('Guru.guruKehadiran');
// });

// Route::get('detail kehadiran', function () {
//     return view('Guru.detailKehadiran');
// });

// Route::get('guru profil', function () {
//     return view('Guru.guruProfil');
// });

// Route::get('admin menu', function () {
//     return view('Pages.menu');
// });

// Route::get('admin guru', function () {
//     return view('Admin.adminGuru');
// });

// Route::get('tambah guru', function () {
//     return view('Admin.tambahGuru');
// });

// Route::get('admin mapel', function () {
//     return view('Admin.adminMapel');
// });

// Route::get('tambah mapel', function () {
//     return view('Admin.tambahMapel');
// });

// Route::get('admin siswa', function () {
//     return view('Admin.adminSiswa');
// });

// Route::get('tambah siswa', function () {
//     return view('Admin.tambahSiswa');
// });

// Route::get('admin ortu', function () {
//     return view('Admin.adminOrtu');
// });

// Route::get('tambah ortu', function () {
//     return view('Admin.tambahOrtu');
// });

// Route::get('admin anggota', function () {
//     return view('Admin.adminAnggotaAdmin');
// });

// Route::get('tambah admin', function () {
//     return view('Admin.tambahAnggotaAdmin');
// });

// Route::get('admin kelas siswa', function () {
//     return view('Admin.adminKelasSiswa');
// });

// Route::get('tambah kelas siswa', function () {
//     return view('Admin.tambahKelasSiswa');
// });

// Route::view('welcome', 'welcome');
// Route::view('table', 'table');
// Route::view('modals', 'modals');
// Route::view('form', 'form');
