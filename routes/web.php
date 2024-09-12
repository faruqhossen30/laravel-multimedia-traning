<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactpageController;
use App\Http\Controllers\HomapageCotroller;
use App\Http\Controllers\ServicepageController;
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






Route::get('/test', function () {
    return view('test');
});



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/',[HomapageCotroller::class,'homepage'])->name('homepage');
Route::get('/services',[ServicepageController::class,'servicePage'])->name('servicepage');
Route::get('/contactpage',[ContactpageController::class,'ContactPage'])->name('contactpage');
Route::post('/contact-send',[ContactpageController::class,'Send'])->name('contact.send');

require __DIR__ . '/auth.php';
