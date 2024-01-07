<?php

use App\Models\User;
use App\Http\Middleware\RoleCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\MultipleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CheckRoleController;
use App\Http\Controllers\MultipleExcelController;

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

Route::get('/', function () {
    return view('/login');
});

// Route Halaman Confirm Role

Route::get('/lengkapi-data',[ViewController::class, 'confirmRole'])->name('confirm-role');

Route::post('/confirm-role', [CheckRoleController::class, 'checkRole'])->name('check-role');

// Login And Register
    Route::get('/login', [ViewController::class, 'login'])->name('login-index');
    Route::post('/login.store', [LoginController::class, 'store']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class,'create'])->name('register.create');
// 

// createCheckAndRole
Route::get('/confirm', function(){
    $users = User::all();
    return view('confirm-roles', [ 'users' => $users ]);
})->name('confirm-roles-view');

Route::post('/confirm-roles', [RegisterController::class, 'createAndCheckRoles'])->name('confirm-roles');
// Keluar

Route::get('/keluar', [LoginController::class, 'keluar'])->name('keluar');

// 
Route::group(['middleware' => 'role', 'prefix' => 'guru'],function () {

    Route::get('/app' , [ViewController::class, 'appGuru'])->name('appGuru');
    // Beranda

    Route::get('/beranda' , [ViewController::class, 'berandaGuru'])->name('beranda-guru');
    // Manajemen ujian
    Route::get('/manajemen-ujian', [ViewController::class, 'manajemenUjian'])->name('manajemen-ujian');

    Route::get('/soal-pilgan', [ViewController::class, 'soalPilgan'])->name('soal-pilgan');
    // --- upload soal pilgan
    Route::get('/upload-soal-pilgan' ,[ViewController::class, 'uploadSoalPilgan'])->name('upload-soal-pilgan');
    // --- tambah soal pilgan
    Route::get('/tambah-soal-pilgan' , [ViewController::class,'tambahSoalPilgan'])->name('tambah-soal-pilgan');

    // -- Lihat Soal ujian
    Route::get('/daftarsoal-ujian', [ViewController::class, 'lihatSoalUjian'])->name('daftarsoal-ujian');
    // -- Lihat soal essay
    Route::get('/soal-essay', [ViewController::class, 'soalEssay'])->name('soal-essay');
    // --- upload bank soal essay 
    Route::get('/upload-soal-essay', [ViewController::class,'uploadSoalEssay'])->name('upload-soal-essay');
    // --- tambah soal essay
    Route::get('/tambah-soal-essay' , [ViewController::class,'tambahSoalEssay'])->name('tambah-soal-essay');

    // --- tambah data ujian 
    Route::get('/tambah-topikujian', [ViewController::class,'tambahTopikUjian'])->name('tambah-topikujian');

    // Manajemen materi
    Route::get('manajemen-materi', [ViewController::class, 'manajemenMateri'])->name('manajemen-materi');
    // --- tambah data
    Route::get('/tambah-materi', [ViewController::class, 'tambahMateri'])->name('halaman-tambah-materi');
    // --- edit data
    Route::get('/edit-materi', [ViewController::class, 'editMateri'])->name('edit-materi');

    // Manajemen bank soal
    // -- Bank soal pilgan
    Route::get('/bank-soal-pilgan',[ViewController::class, 'manajemenBankSoalPilgan'])->name('bank-soal-pilgan');
    // -- Bank soal essay
    Route::get('/bank-soal-essay', [ViewController::class, 'manajemenBankSoalEssay'])->name('bank-soal-essay');
    
    // ! Route post tentukan mapel sebelum import bank soal pilgan)
    // ! Route Import Dibawah


    // Export Excel
    Route::get('/contoh-soal-pilgan', [MultipleController::class, 'export'])->name('download-pilgan');
    Route::resource('multiples', MultipleController::class);
});

Route::post('/import-soal', [MultipleController::class,'import'])->name('import-soal-pilgan');

Route::group(['middleware' => 'role', 'prefix' => 'admin'], function() {

    Route::get('/app', [ViewController::class, 'appAdmin'])->name('appAdmin');
    // Master Data Siswa
    Route::get('/data-siswa', [ViewController::class, 'masterDataSiswa'])->name('data-siswa');
    // -- upload data siswa
    Route::get('/upload-data-siswa', [ViewController::class, 'uploadDataSiswa'])->name('upload-data-siswa');
    // Master Data Pendidik
    Route::get('/data-pendidik', [ViewController::class, 'masterDataPendidik'])->name('data-pendidik');
    // -- upload data pendidik
    Route::get('/upload-data-pendidik', [ViewController::class, 'uploadDataPendidik'])->name('upload-data-pendidik');
    
    // Master Pengguna Aktif
    Route::get('/pengguna-aktif', [ViewController::class,'masterPenggunaAktif'])->name('pengguna-aktif');

    Route::resource('kelas', KelasController::class);
    
    // Master Lesson Admin -- bagian master mapel
    Route::get('/teacherlesson', [LessonController::class,'createteacherlesson'])->name('lessons.createteacherlesson');
    Route::post('/teacherstore', [LessonController::class,'storeteacherlesson'])->name('lessons.storeteacherlesson');
    Route::resource('lessons', LessonController::class);

});


// Siswa
Route::prefix('siswa')->group(function () {
Route::get('/app', [ViewController::class,'appSiswa'])->name('appSiswa');
// Ujian siswa
Route::get('/materi' , [ViewController::class, 'materiSiswa'])->name('materi-siswa');
// -- Menu pilihan ujian siswa
Route::get('/pilihan-materi' ,[ViewController::class,'pilihanMateri'])->name('pilihan-materi');

});
