<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\PopupController::class, 'index1'])->name('popups.index1');
Route::get('/popups', [App\Http\Controllers\PopupController::class, 'index2'])->name('popups.index2');
Route::get('/popupview', [App\Http\Controllers\PopupController::class, 'view'])->name('popups.view');
Route::post('/popupstore', [App\Http\Controllers\PopupController::class, 'store'])->name('popups.store');
Route::delete('/popupdelete/{popup}', [App\Http\Controllers\PopupController::class, 'destroy'])->name('popups.delete');
Route::put('/popups/{popup}/deactivate', [App\Http\Controllers\PopupController::class, 'deactivate'])->name('popups.deactivate');
Route::put('/popups/{popup}/activate', [App\Http\Controllers\PopupController::class, 'activate'])->name('popups.activate');



Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('sites.index');
Route::post('/store', [App\Http\Controllers\SiteController::class, 'store'])->name('sites.store');
Route::get('/view', [App\Http\Controllers\SiteController::class, 'view'])->name('sites.view');
Route::get('/edit/{site}', [App\Http\Controllers\SiteController::class, 'edit'])->name('sites.edit');
Route::put('/update/{site}', [App\Http\Controllers\SiteController::class, 'update'])->name('sites.update');
Route::delete('/delete/{site}', [App\Http\Controllers\SiteController::class, 'destroy'])->name('sites.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
