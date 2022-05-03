<?php

use App\Http\Controllers\CertificateController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/add-certificate', function () {
    return view('add-certificate');
})->middleware(['auth'])->name('add-certificate');

Route::get('/certificate_details', function () {
    return view('certificate_details');
})->middleware(['auth'])->name('certificate_details');

route::post('certificate', [CertificateController::class, 'store'])->middleware(['auth']);

require __DIR__.'/auth.php';
