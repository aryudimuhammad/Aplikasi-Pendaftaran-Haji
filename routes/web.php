<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/admin/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'index'])->name('adminpendaftaran');
Route::post('/admin/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'create'])->name('adminpendaftarancreate');
Route::put('/admin/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'edit'])->name('ongkiradminpendaftaranedit');
Route::delete('/admin/pendaftaran/{id}', [App\Http\Controllers\PendaftaranController::class, 'delete'])->name('adminpendaftarandelete');
