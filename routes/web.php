<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DashboardAdminController;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'index'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');


Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::get('/dashboard/admin', [DashboardAdminController::class, 'index'])->middleware('admin');
Route::get('/dashboard/admin/hapus/{id}', [DashboardAdminController::class, 'hapus'])->middleware('admin');
Route::get('/dashboard/admin/detail/{id}', [DashboardAdminController::class, 'show'])->middleware('admin');
Route::get('/dashboard/admin/edit/{id}', [DashboardAdminController::class, 'edit'])->middleware('admin');
Route::post('/dashboard/admin/edit/{id}', [DashboardAdminController::class, 'update'])->middleware('admin');




Route::resource('/daftar/jabatan', JabatanController::class)->middleware('auth');
Route::resource('/daftar', DataController::class)->middleware('auth');




// Route::get('/daftar', [DataController::class, 'index'])->middleware('auth');
// Route::post('/daftar', [DataController::class, 'store'])->middleware('auth');


// Route::get('/daftar/jabatan', [Newjabatan::class], 'index');
// Route::get('/daftar/jabatan/create', [Newjabatan::class], 'create');
// Route::put('/daftar/jabatan', JabatanController::class);