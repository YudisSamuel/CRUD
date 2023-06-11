<?php
use App\Http\Controllers\SuhuController;
use App\Http\Controllers\LokasiController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
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
    return view('main');
});

Route::get('Grafik', function () {
    return view('Grafik.data');
});

Route::get('Kecamatan', function () {
    return view('Lokasi.Kecamatan');
});

Route::get('Kota', function () {
    return view('Lokasi.Kota');
});

Route::get('Provinsi', function () {
    return view('Lokasi.Provinsi');
});

Route::get('Alat', function () {
    return view('Alat.data');
});

Route::get('Informasi', function () {
    return view('Informasi');
});

Route::get('User', function () {
    return view('User');
});

Route::get('Laporan', function () {
    return view('Laporan');
});

Route::get('Pengaduan', function () {
    return view('Pengaduan');
});

Route::get('Respon', function () {
    return view('Respon');
});

Route::get('LokasiSide', function () {
    return view('LokasiSide');
});

// Route::get('lokasi', function () {
//     return view('Lokasi.Lokasi');
// });

Route::get('/Suhu',[SuhuController::class, 'Suhu'])->name('Suhu'); 
Route::get('/iSuhu', [SuhuController::class, 'iSuhu'])->name('iSuhu');
//Route::post('/Suhu/add', [SuhuController::class, 'instSuhu'])->name('instSuhu');
Route::get('/exportSuhu/{id}',[SuhuController::class, 'exportSuhu'])->name('exportSuhu');
Route::get('iSuhu/{id}', 'SuhuController@iSuhu');
Route::get('/editSuhu/{id}', [SuhuController::class, 'editSuhu'])->name('editSuhu');
Route::post('/updateSuhu/{id}', [SuhuController::class, 'updateSuhu'])->name('updateSuhu');
Route::get('/delSuhu{id}', [SuhuController::class, 'delSuhu'])->name('delSuhu');

// Route::get('/Lokasi', [LokasiController::class, 'index']);
// Route::get('/lokasi/{id}', [LokasiController::class, 'getLokasi']);