<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\KrsDetailController;

/*
|--------------------------------------------------------------------------
| HALAMAN AWAL
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login');
});

/*
|--------------------------------------------------------------------------
| AUTHENTICATION
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    // Login
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // Register
    Route::get('/register', [AuthController::class, 'registerView'])->name('register.view');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

});

/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| DASHBOARD & CRUD
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | Mahasiswa
    |--------------------------------------------------------------------------
    */

    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);

    Route::get('/mahasiswa-create', [MahasiswaController::class, 'create'])->name('mahasiswa.add');

    Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.save');

    Route::get('/mahasiswa-edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.update');

    Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.edit');

    Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');

    /*
    |--------------------------------------------------------------------------
    | Dosen
    |--------------------------------------------------------------------------
    */

    Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
    Route::get('/dosen/{id}', [DosenController::class, 'show']);

    Route::get('/dosen-create', [DosenController::class, 'create'])->name('dosen.add');

    Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.save');

    Route::get('/dosen-edit/{id}', [DosenController::class, 'edit'])->name('dosen.update');

    Route::put('/dosen/{id}', [DosenController::class, 'update'])->name('dosen.edit');

    Route::delete('/dosen/{id}', [DosenController::class, 'destroy'])->name('dosen.delete');

    /*
    |--------------------------------------------------------------------------
    | Jurusan
    |--------------------------------------------------------------------------
    */

    Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('/jurusan/{id}', [JurusanController::class, 'show']);

    Route::get('/jurusan-create', [JurusanController::class, 'create'])->name('jurusan.add');

    Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.save');

    Route::get('/jurusan-edit/{id}', [JurusanController::class, 'edit'])->name('jurusan.update');

    Route::put('/jurusan/{id}', [JurusanController::class, 'update'])->name('jurusan.edit');

    Route::delete('/jurusan/{id}', [JurusanController::class, 'destroy'])->name('jurusan.delete');

    /*
    |--------------------------------------------------------------------------
    | Mata Kuliah
    |--------------------------------------------------------------------------
    */

    Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
    Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show']);

    Route::get('/matakuliah-create', [MatakuliahController::class, 'create'])->name('matakuliah.add');

    Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.save');

    Route::get('/matakuliah-edit/{id}', [MatakuliahController::class, 'edit'])->name('matakuliah.update');

    Route::put('/matakuliah/{id}', [MatakuliahController::class, 'update'])->name('matakuliah.edit');

    Route::delete('/matakuliah/{id}', [MatakuliahController::class, 'destroy'])->name('matakuliah.delete');

    /*
    |--------------------------------------------------------------------------
    | Kelas
    |--------------------------------------------------------------------------
    */

    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');

    Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');

    Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');

    Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.delete');

    /*
    |--------------------------------------------------------------------------
    | KRS
    |--------------------------------------------------------------------------
    */

    Route::get('/krs', [KrsController::class, 'index'])->name('krs.index');

    Route::get('/krs/create', [KrsController::class, 'create'])->name('krs.create');

    Route::post('/krs/store', [KrsController::class, 'store'])->name('krs.store');

    Route::delete('/krs/{id}', [KrsController::class, 'destroy'])->name('krs.delete');

    /*
    |--------------------------------------------------------------------------
    | KRS Detail
    |--------------------------------------------------------------------------
    */

    Route::get('/krs-detail', [KrsDetailController::class, 'index'])->name('krsdetail.index');

    Route::get('/krs-detail/create', [KrsDetailController::class, 'create'])->name('krsdetail.create');

    Route::post('/krs-detail/store', [KrsDetailController::class, 'store'])->name('krsdetail.store');

    Route::delete('/krs-detail/{id}', [KrsDetailController::class, 'destroy'])->name('krsdetail.delete');

});