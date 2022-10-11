<?php

use App\Http\Controllers\agamaController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\bpdController;
use App\Http\Controllers\CategoryBlogController;
use App\Http\Controllers\dashboard\pendudukController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\geografisController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\misiController;
use App\Http\Controllers\pekerjaanController;
use App\Http\Controllers\pendidikanController;
use App\Http\Controllers\perangkatController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\sasaranController;
use App\Http\Controllers\sejarahController;
use App\Http\Controllers\tujuanController;
use App\Http\Controllers\visiController;
use App\Models\agama;
use App\Models\blog;
use App\Models\pekerjaan;
use App\Models\pendidikan;
use App\Models\perangkat;
use App\Models\sejarah;
use Illuminate\Support\Facades\Route;

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

Route::resource('/', landingController::class);
Route::get('/sejarah-desa', [sejarahController::class, 'sejarah_desa'])->name('sejarah-desa');

// Route::get('/', function () {
//     return view(');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::resource('dashboard', dashboardController::class);
    Route::resource('penduduk', pendudukController::class);
    Route::resource('pendidikan', pendidikanController::class);
    Route::resource('pekerjaan', pekerjaanController::class);
    Route::resource('agama', agamaController::class);
    Route::resource('blog', blogController::class);
    Route::resource('categori-blog', CategoryBlogController::class);
    Route::resource('perangkat', perangkatController::class);
    Route::resource('bpd', bpdController::class);
    Route::resource('sejarah', sejarahController::class);
    Route::resource('visi', visiController::class);
    Route::resource('misi', misiController::class);
    Route::resource('tujuan', tujuanController::class);
    Route::resource('sasaran', sasaranController::class);
    Route::resource('geografis', geografisController::class);
    Route::resource('profile', profileController::class);
});
