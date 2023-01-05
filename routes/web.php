<?php

use App\Http\Controllers\DosenController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::group dosen
Route::group(['prefix' => '/dosen'], function() {
    Route::get('/profil', [DosenController::class, 'profil'])->name('dosen.profil');
    Route::get('/data_ampu', [DosenController::class, 'ampu'])->name('dosen.dataampu');
});
