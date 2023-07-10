<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TahunAjarController;
use App\Http\Controllers\KelasController;
use App\Models\TahunAjar;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('login');

Route::post('/', [LoginController::class, 'authenticate'])->name('auth');


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth:siswa')->group(function () {

    Route::get('/menuSiswa', [SiswaController::class, 'index'])->name('menuSiswa');
    Route::get('/nilaiSiswa', [SiswaController::class, 'nilai'])->name('nilaiSiswa');
    Route::get('/kehadiranSiswa', [SiswaController::class, 'kehadiran'])->name('kehadiranSiswa');

});
Route::middleware('auth:admin')->group(function () {

    Route::get('/menuAdmin', [AdminController::class, 'index'])->name('menuAdmin');
    Route::get('/aspirasiAdmin', [AdminController::class, 'aspirasi'])->name('aspirasiAdmin');    
    Route::get('/ortuAdmin', [AdminController::class, 'ortu'])->name('ortuAdmin');
    Route::get('/pegawaiAdmin', [AdminController::class, 'pegawai'])->name('pegawaiAdmin'); 
    Route::get('/kelasSiswaAdmin', [AdminController::class, 'siswa'])->name('kelasSiswaAdmin'); 

    //Mapel
    Route::get('/mapel', [MapelController::class, 'index'])->name('mapel');
    Route::post('/tambahMapel', [MapelController::class, 'simpanMapel'])->name('tambahMapel');
    Route::get('/mapel/editMapel/{id}', [MapelController::class, 'getById'])->name('editMapel'); 
    Route::post('/mapel/updateMapel', [MapelController::class, 'updateMapel'])->name('updateMapel');
    Route::post('/mapel/delete/{id}', [MapelController::class, 'destroy'])->name('deleteMapel'); 

    // Kurikulum
    Route::get('/kurikulum', [KurikulumController::class, 'index'])->name('kurikulum'); 
    Route::post('/kurikulum/tambahKurikulum', [KurikulumController::class, 'store'])->name('tambahKurikulum'); 
    Route::get('/kurikulum/editKurikulum/{id}', [KurikulumController::class, 'getById'])->name('editKurikulum'); 
    Route::post('/kurikulum/updateKurikulum', [KurikulumController::class, 'updateKurikulum'])->name('updateKurikulum'); 
    Route::post('/kurikulum/delete/{id}', [KurikulumController::class, 'destroy'])->name('deleteKurikulum'); 

    //Tahun Ajar
    Route::get('/tahunAjar', [TahunAjarController::class, 'index'])->name('tahunAjar'); 
    Route::post('/tahunAjar/tambahTahunAjar', [TahunAjarController::class, 'simpanTahunAjar'])->name('tambahTahunAjar'); 
    Route::get('/tahunAjar/editTahunAjar/{id}', [TahunAjarController::class, 'getById'])->name('editTahunAjar'); 
    Route::post('/tahunAjar/updateTahunAjar', [TahunAjarController::class, 'updateTahunAjar'])->name('updateTahunAjar'); 
    Route::post('/tahunAjar/delete/{id}', [TahunAjarController::class, 'destroy'])->name('deleteTahunAjar');

    //Kelas atau ruang kelas
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
    Route::post('/kelas/tambahKelas', [KelasController::class, 'simpanKelas'])->name('tambahKelas'); 
    Route::get('/kelas/editKelas/{id}', [KelasController::class, 'getById'])->name('editKelas'); 
    Route::post('/kelas/updateKelas', [KelasController::class, 'updateKelas'])->name('updateKelas'); 
    Route::post('/kelas/delete/{id}', [KelasController::class, 'destroy'])->name('deleteKelas');

    //Guru
    Route::get('/masterGuru', [GuruController::class, 'index'])->name('masterGuru');
    Route::post('/guru/simpanGuru', [GuruController::class, 'simpanGuru'])->name('simpanGuru'); 
    Route::get('/guru/tambahGuru', [GuruController::class, 'tambahGuru'])->name('tambahGuru'); 
    Route::get('/guru/showGuruById/{id}', [GuruController::class, 'showGuruById'])->name('showGuruById');
    Route::get('/guru/editGuru/{id}', [GuruController::class, 'editGuru'])->name('editGuru'); 
    Route::post('/guru/updateGuru', [GuruController::class, 'updateGuru'])->name('updateGuru'); 

    //Siswa
    Route::get('/masterSiswa', [SiswaController::class, 'index'])->name('masterSiswa');
    Route::get('/siswa/showSiswaById/{id}', [SiswaController::class, 'showSiswaById'])->name('showSiswaById');
    Route::post('/siswa/simpanSiswa', [SiswaController::class, 'simpanSiswa'])->name('simpanSiswa'); 
    Route::get('/siswa/tambahSiswa', [SiswaController::class, 'tambahSiswa'])->name('tambahSiswa'); 
});

Route::middleware('auth:guru')->group(function () {
    Route::get('/menuGuru', [GuruController::class, 'index'])->name('menuGuru');
});

Route::middleware('auth:ortu')->group(function () {
    Route::get('/menuOrtu', [OrtuController::class, 'index'])->name('menuOrtu');
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
Route::view('form', 'form');
