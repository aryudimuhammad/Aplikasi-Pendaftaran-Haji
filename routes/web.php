<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PembayaranAdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'Checkrole:2']], function ()
{
Route::get('/user', [App\Http\Controllers\PendaftaranController::class, 'pendaftaran'])->name('pendaftaran');
Route::post('/user/pembayaran', [App\Http\Controllers\PembayaranController::class, 'store'])->name('pembayaranstore');
Route::post('/user', [App\Http\Controllers\PendaftaranUserController::class, 'store'])->name('pendaftaranstore');
});

Route::group(['middleware' => ['auth', 'Checkrole:1']], function ()
{
Route::get('/admin/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'index'])->name('adminpendaftaran');
Route::post('/admin/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'create'])->name('adminpendaftarancreate');
Route::get('/admin/pendaftaran/{id}', [App\Http\Controllers\PendaftaranController::class, 'edit'])->name('adminpendaftaranedit');
Route::put('/admin/pendaftaran/{id}', [App\Http\Controllers\PendaftaranController::class, 'update'])->name('adminpendaftaranupdate');
Route::delete('/admin/pendaftaran/{id}', [App\Http\Controllers\PendaftaranController::class, 'delete'])->name('adminpendaftarandelete');

// revisi
Route::get('/admin/proseskeberangkatan', [App\Http\Controllers\ProseskeberangkatanController::class, 'index'])->name('adminproseskeberangkatan');
Route::put('/admin/proseskeberangkatan/{id}', [App\Http\Controllers\ProseskeberangkatanController::class, 'edit'])->name('adminproseskeberangkatanedit');
// ---

Route::resource('pembayaran', PembayaranAdminController::class)->except('index', 'create', 'show', 'edit');
Route::name('pembayaran.')->prefix('pembayaran')->group(function () {
    Route::get('/index/{id}', [PembayaranAdminController::class, 'index'])->name('index');
    Route::get('/create/{id}', [PembayaranAdminController::class, 'create'])->name('create');
});

// Route::get('/admin/pembayaran/{id}', [App\Http\Controllers\PembayaranAdminController::class, 'index'])->name('adminpembayaranindex');
// Route::get('/admin/pembayaran/{id}', [App\Http\Controllers\PembayaranAdminController::class, 'create'])->name('adminpembayarancreate');
// Route::get('/admin/pembayaran/{id}', [App\Http\Controllers\PembayaranAdminController::class, 'store'])->name('adminpembayaranstore');
// Route::delete('/admin/pembayaran/{id}', [App\Http\Controllers\PembayaranAdminController::class, 'destroy'])->name('adminpembayarandelete');

});

Route::prefix('report')->name('report.')->group(function () {
    Route::get('/cetak/pendaftaryearfilter', [ReportController::class, 'pendaftarYearFilter'])->name('pendaftarYearFilter');
    Route::get('/cetak/pendaftaryear', [ReportController::class, 'pendaftarYear'])->name('pendaftarYear');

    Route::get('/cetak/pendaftarhajiyearfilter', [ReportController::class, 'pendaftarhajiYearFilter'])->name('pendaftarhajiYearFilter');
    Route::get('/cetak/pendaftarhajiyear', [ReportController::class, 'pendaftarhajiYear'])->name('pendaftarhajiYear');

    Route::get('/cetak/berangkathajiyearfilter', [ReportController::class, 'berangkathajiYearFilter'])->name('berangkathajiYearFilter');
    Route::get('/cetak/berangkathajiyear', [ReportController::class, 'berangkathajiYear'])->name('berangkathajiYear');

    Route::get('/cetak/pembatalanhajiyearfilter', [ReportController::class, 'pembatalanhajiYearFilter'])->name('pembatalanhajiYearFilter');
    Route::get('/cetak/pembatalanhajiyear', [ReportController::class, 'pembatalanhajiYear'])->name('pembatalanhajiYear');

    Route::get('/cetak/pembayaranbankfilter', [ReportController::class, 'pembayaranbankFilter'])->name('pembayaranbankFilter');
    Route::get('/cetak/pembayaranbank', [ReportController::class, 'pembayaranbank'])->name('pembayaranbank');

    Route::get('/cetak/pembayaranuser/{id}', [ReportController::class, 'pembayaranuser'])->name('pembayaranuser');

    Route::get('/cetak/grafik', [ReportController::class, 'grafik'])->name('grafik');
    Route::get('/cetak/grafikuser', [ReportController::class, 'grafikuser'])->name('grafikuser');

});
