<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa', [SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::patch('/siswa/{id}', [SiswaController::class, 'update']);
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy']);    

Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas/create', [KelasController::class, 'create']);
Route::post('/kelas', [KelasController::class, 'store']);
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);
Route::patch('/kelas/{id}', [KelasController::class, 'update']);
Route::delete('/kelas/{id}', [KelasController::class, 'destroy']); 

// Route::get('/belajar', function() {
//     // return view('belajar');

//     //view menggunakan cara 1
//     // $data['nama'] = "Krisna";
//     // $data['jk'] = "Laki-laki";
//     // return view('belajar', $data);

//     //view menggunakan cara 2
//     $nama = "Krisna";
//     $jk = "Laki-laki";
//     return view('belajar', compact('nama', 'jk'));
//  });
 
//  Route::get('/pertama', [SiswaController::class, 'pertama']);

//  Route::get('/kedua', [SiswaController::class, 'kedua']);

//  Route::get('/ketiga', [SiswaController::class, 'ketiga']);

// Route::get('/pertama', function() {
//     return view('pertama');
// });

// Route::get('/kedua', function() {
//     return view('kedua');
// });

// Route::get('/ketiga', function() {
//     return view('ketiga');
// });