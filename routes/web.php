<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TahunAjarController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelasMapelController;
use App\Http\Controllers\KepsekController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaKelasController;
use App\Models\Aspirasi;
use App\Models\KelasMapel;
use App\Models\TahunAjar;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('login');

Route::post('/', [LoginController::class, 'authenticate'])->name('auth');


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth:siswa')->group(function () {

    Route::get('/menuSiswa/{id}', [SiswaController::class, 'menuSiswa'])->name('menuSiswa');
    Route::get('/nilaiSiswa', [NilaiController::class, 'ShowNilaiSiswa'])->name('nilaiSiswa');
    Route::get('/kehadiranSiswa', [KehadiranController::class, 'viewKehadiranSiswa'])->name('kehadiranSiswa');
    // Route::get('/kehadiranSiswaKelas', [KehadiranController::class, 'getWaliKelasKehadiran'])->name('kehadiranSiswaKelas');
});
Route::middleware('auth:admin')->group(function () {

    Route::get('/menuAdmin', [AdminController::class, 'menuAdmin'])->name('menuAdmin');
    Route::get('/aspirasiAdmin', [AspirasiController::class, 'index'])->name('aspirasiAdmin');
    Route::get('/aspirasiAdmin/showAspirasiById/{id}', [AspirasiController::class, 'showAspirasiById'])->name('showAspirasiById');

    //Pegawai
    Route::get('/pegawaiAdmin', [AdminController::class, 'index'])->name('pegawaiAdmin');
    Route::post('/pegawai/tambahPegawai', [AdminController::class, 'simpaPegawai'])->name('tambahPegawai');
    Route::get('/pegawai/showPegawai/{id}', [AdminController::class, 'showPegawaiById'])->name('showPegawai');
    Route::get('/pegawai/editPegawai/{id}', [AdminController::class, 'editPegawai'])->name('editPegawai');
    Route::post('/pegawai/updatePegawai', [AdminController::class, 'updatePegawai'])->name('updatePegawai');
    Route::delete('/pegawai/{user}', [AdminController::class, 'destroy'])->name('users.destroy');

    //KelasMapel
    Route::get('/kelasMapel', [KelasMapelController::class, 'index'])->name('kelasMapel');
    Route::post('/kelasMapel/tambahKelas', [KelasMapelController::class, 'simpan'])->name('tambahKelasMapel');
    Route::get('/kelasMapel/editKelasMapel/{id}', [KelasMapelController::class, 'getById'])->name('editKelasMapel');
    Route::post('/kelasMapel/updateKelasMapel', [KelasMapelController::class, 'updateKelasMapel'])->name('updateKelasMapel');
    Route::get('/searchSiswa', [SiswaController::class, 'selectSearch'])->name('searchSiswa');

    //Siswa Kelas
    Route::post('/kelasSiswa/simpanTambahSisKel', [SiswaKelasController::class, 'simpanSisKel'])->name('simpanTambahSisKel');
    Route::get('/kelas/tambahSiswaKelas/{id}', [SiswaKelasController::class, 'tambahSiswaKelas'])->name('tambahSiswaKelas');
    Route::post('/kelas/hapusSiswaKelas/{id}', [SiswaKelasController::class, 'hapusSiswaKelas'])->name('hapusSiswaKelas');   

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
    Route::get('/tahunAjar/editTahunAjar/{id}', [TahunAjarController::class, 'tahunAjarById'])->name('editTahunAjar');
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

    //Ortu
    Route::get('/ortuAdmin', [OrtuController::class, 'getAllOrtu'])->name('ortuAdmin');
    Route::get('/ortu/tambahOrtu', [OrtuController::class, 'tambahOrtu'])->name('tambahOrtu');
    Route::get('/cariSiswa', [OrtuController::class, 'selectSearchSiswa'])->name('cariSiswa');
    Route::post('/ortu/simpanOrtu', [OrtuController::class, 'simpanOrtu'])->name('simpanOrtu');
    Route::get('/ortu/editOrtu/{id}', [OrtuController::class, 'getById'])->name('editOrtu');
    Route::post('/ortu/updateOrtu', [OrtuController::class, 'updateOrtu'])->name('updateOrtu');

    Route::get('/aspirasiExportByAdmin', [AspirasiController::class, 'aspirasiExport'])->name('aspirasiExportByAdmin');
});

Route::middleware('auth:guru')->group(function () {
    Route::get('/menuGuru/{id}', [GuruController::class, 'menu'])->name('menuGuru');
    Route::get('/waliKelas', [GuruController::class, 'indexWaliKelas'])->name('waliKelas');
    Route::get('/guru/nilai', [NilaiController::class, 'nilai'])->name('nilaiGuru');
    Route::get('/guru/kehadiran', [KehadiranController::class, 'kehadiran'])->name('kehadiranGuru');
    Route::get('/guru/profil/{id}', [GuruController::class, 'profil'])->name('profilGuru');
    Route::get('/guru/tambahNts/{id}', [NilaiController::class, 'tambahNts'])->name('tambahNts');
    Route::get('/guru/tambahNas/{id}', [NilaiController::class, 'tambahNas'])->name('tambahNas');
    Route::get('/guru/tampilKehadiran', [KehadiranController::class, 'tampilKehadiran'])->name('tampilKehadiran');
    Route::get('/guru/tambahKehadiran/{id}', [KehadiranController::class, 'tambahKehadiran'])->name('tambahKehadiran');
    Route::post('/guru/simpanKehadiran', [KehadiranController::class, 'simpanKehadiran'])->name('simpanKehadiran');
    Route::post('/guru/updateKehadiran/{id}', [KehadiranController::class, 'simpanKehadiran'])->name('updateKehadiran');
    // Route::post('/guru/updateKehadiran ', [KehadiranController::class, 'updateKehadiran'])->name('updateKehadiran');
    Route::get('/guru/editKehadiran/{id}', [KehadiranController::class, 'editKehadiran'])->name('editKehadiran');
    // Route::post('/guru/saveKehadiran', [GuruController::class, 'processInputKehadiran'])->name('saveKehadiran');
    Route::post('/guru/ubahGuru', [GuruController::class, 'updateGuru'])->name('ubahGuru');

    //WaliKelas
    Route::get('/guru/waliKelas/showNilaiByWaliKelas/{id}', [NilaiController::class, 'showNilaiByWaliKelas'])->name('showNilaiByWaliKelas');

    Route::post('/guru/inputNts', [NilaiController::class, 'inputNts'])->name('inputNts');
    Route::get('/guru/editNts/{id}', [NilaiController::class, 'getById'])->name('editNts');
    Route::post('/guru/updateNts', [NilaiController::class, 'updateNts'])->name('updateNts');
    Route::get('/guru/editNas/{id}', [NilaiController::class, 'nasGetById'])->name('editNas');
    Route::post('/guru/updateNas', [NilaiController::class, 'updateNas'])->name('updateNas');
    Route::get('/guru/showSiskelById/{id}', [SiswaKelasController::class, 'showSiskelById'])->name('showSiskelById');

    Route::get('/guru/showAspirasi/{id}', [AspirasiController::class, 'showAspirasi'])->name('showAspirasi');
    Route::get('/guru/aspirasi', [AspirasiController::class, 'lihatAspirasiByGuru'])->name('aspirasiGuru');

    Route::get('/guru/nilaiPerWaliKelasExport/{id}', [NilaiController::class, 'nilaiPerWaliKelasExport'])->name('nilaiPerWaliKelasExport');
});

Route::middleware('auth:ortu')->group(function () {
    Route::get('/menuOrtu/{id}', [OrtuController::class, 'index'])->name('menuOrtu');
    Route::get('/nilaiSiswaOrtu', [NilaiController::class, 'ShowNilaiOrtu'])->name('nilaiSiswaOrtu');
    Route::get('/kehadiranOrtu', [KehadiranController::class, 'viewKehadiranOrtu'])->name('kehadiranOrtu');
    Route::get('/aspirasiOrtu/{id}', [AspirasiController::class, 'aspirasiByOrtu'])->name('aspirasiOrtu');
    Route::get('/showAspirasiByOrtu/{id}', [AspirasiController::class, 'showAspirasiByOrtu'])->name('showAspirasiByOrtu');
    Route::post('/simpanAspirasi', [AspirasiController::class, 'simpanAspirasi'])->name('simpanAspirasi');
});

Route::middleware('auth:kepsek')->group(function () {
    Route::get('/menuKepsek', [KepsekController::class, 'index'])->name('menuKepsek');
    Route::get('/aspirasiByKepsek', [AspirasiController::class, 'lihatAspirasiByKepsek'])->name('aspirasiByKepsek');
    Route::get('/showAspirasiByKepsek/{id}', [AspirasiController::class, 'showAspirasiByKepsek'])->name('showAspirasiByKepsek');
    Route::get('/nilaiKelas', [KepsekController::class, 'indexSemuaNilaiKelas'])->name('nilaiKelas');
    Route::get('/showNilaiByKepsek/{id}', [NilaiController::class, 'showNilaiByWaliKelas'])->name('showNilaiByKepsek');
    Route::get('/aspirasiExport', [AspirasiController::class, 'aspirasiExport'])->name('aspirasiExport');
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
