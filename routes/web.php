<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RainforestAPI;
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

Route::get('/', [JobController::class, 'all']);
Route::get('/rainforest', [RainforestAPI::class,'index']);

Route::get('/jobs', [JobController::class, 'all']);

Route::get('/admin/dashboard', [JobController::class,'admin'])
->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
