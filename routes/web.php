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
use App\Http\Controllers\KelasSiswaController;
use App\Http\Controllers\SiswaKelasController;
use App\Models\KelasSiswa;
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

    Route::get('/menuAdmin', [AdminController::class, 'menuAdmin'])->name('menuAdmin');
    Route::get('/aspirasiAdmin', [AdminController::class, 'aspirasi'])->name('aspirasiAdmin');
    Route::get('/ortuAdmin', [AdminController::class, 'ortu'])->name('ortuAdmin');

    //Pegawai
    Route::get('/pegawaiAdmin', [AdminController::class, 'index'])->name('pegawaiAdmin');
    Route::post('/pegawai/tambahPegawai', [AdminController::class, 'simpaPegawai'])->name('tambahPegawai');
    Route::get('/pegawai/showPegawai/{id}', [AdminController::class, 'showPegawaiById'])->name('showPegawai');
    Route::get('/pegawai/editPegawai/{id}', [AdminController::class, 'editPegawai'])->name('editPegawai');
    Route::post('/pegawai/updatePegawai', [AdminController::class, 'updatePegawai'])->name('updatePegawai');
    Route::delete('/pegawai/{user}', [AdminController::class, 'destroy'])->name('users.destroy');

    //KelasSiswa
    Route::get('/kelasSiswa', [KelasSiswaController::class, 'index'])->name('kelasSiswa');
    Route::post('/kelasSiswa/tambahKelas', [KelasSiswaController::class, 'simpan'])->name('tambahKelasSiswa');
    Route::get('/kelasSiswa/editKelasSiswa/{id}', [KelasSiswaController::class, 'getById'])->name('editKelasSiswa');
    Route::post('/kelasSiswa/updateKelasSiswa', [KelasSiswaController::class, 'updateKelasSiswa'])->name('updateKelasSiswa');
    Route::get('/searchSiswa', [KelasSiswaController::class, 'selectSearch'])->name('searchSiswa'); 
    Route::get('/kelasSiswa/tambahSiswaKelas/{id}', [SiswaKelasController::class, 'tambahSiswaKelas'])->name('tambahSiswaKelas');  

    //Siswa Kelas
    Route::post('/kelasSiswa/simpanTambahSisKel', [SiswaKelasController::class, 'simpanSisKel'])->name('simpanTambahSisKel');  
    // Route::get('/kelasSiswa/tampilDataSisKel', [SiswaKelasController::class, 'index'])->name('tampilDataSisKel');  

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
    Route::get('/guru/exportGuru', [GuruController::class, 'guruExport'])->name('exportGuru');
    Route::post('/guru/importGuru', [GuruController::class, 'guruImportExcel'])->name('importGuru');

    //Siswa
    Route::get('/masterSiswa', [SiswaController::class, 'index'])->name('masterSiswa');
    Route::get('/siswa/showSiswaById/{id}', [SiswaController::class, 'showSiswaById'])->name('showSiswaById');
    Route::post('/siswa/simpanSiswa', [SiswaController::class, 'simpanSiswa'])->name('simpanSiswa');
    Route::get('/siswa/tambahSiswa', [SiswaController::class, 'tambahSiswa'])->name('tambahSiswa');
    Route::get('/siswa/editSiswa/{id}', [SiswaController::class, 'editSiswa'])->name('editSiswa');
    Route::post('/siswa/updateSiswa', [SiswaController::class, 'updateSiswa'])->name('updateSiswa');
});

Route::middleware('auth:guru')->group(function () {
    Route::get('/menuGuru', [GuruController::class, 'menu'])->name('menuGuru');
    Route::get('/guru/nilai/{id}', [GuruController::class, 'nilai'])->name('nilaiGuru');
    Route::get('/guru/kehadiran/{id}', [GuruController::class, 'kehadiran'])->name('kehadiranGuru');
    Route::get('/guru/profil', [GuruController::class, 'profil'])->name('profilGuru');
    Route::get('/guru/tambahNts/{id}', [GuruController::class, 'tambahNts'])->name('tambahNts');
    Route::get('/guru/tambahNas/{id}', [GuruController::class, 'tambahNas'])->name('tambahNas');
    Route::get('/guru/tampilKehadiran/{id}', [GuruController::class, 'tampilKehadiran'])->name('tampilKehadiran');
    Route::post('/guru/viewKehadiran/{id}', [GuruController::class, 'viewKehadiran'])->name('viewKehadiran');
    Route::get('/guru/tambahKehadiran/{id}', [GuruController::class, 'tambahKehadiran'])->name('tambahKehadiran');
    Route::get('/guru/simpanKehadiran', [GuruController::class, 'simpanKehadiran'])->name('simpanKehadiran');

    Route::post('/guru/editNts', [SiswaKelasController::class, 'editNts'])->name('editNts');
    Route::post('/guru/editNas', [SiswaKelasController::class, 'editNas'])->name('editNas');
    Route::get('/guru/showSiskelById/{id}', [SiswaKelasController::class, 'showSiskelById'])->name('showSiskelById');
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

// Route::view('welcome', 'welcome');
// Route::view('table', 'table');
// Route::view('modals', 'modals');
Route::view('form', 'form');
