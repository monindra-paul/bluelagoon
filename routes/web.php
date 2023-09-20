<?php

use App\Http\Controllers\Backend\ContactApplicationController;
use App\Http\Controllers\Backend\DashboardController;


use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;

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




Route::get('/',[HomeController::class,'index']);


Route::get('/services',[ServiceController::class,'service'])->name('services.index');


Route::get('/contact-us',[ContactController::class,'contact']);
Route::post('/contact-us',[ContactController::class,'postContact']);


Route::get('/about-us',[AboutController::class,'index'])->name('about.index');



Route::get('/gallery',[GalleryController::class,'gallery']);






// Admin Route

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/contactapplication',[ContactApplicationController::class,'index'])->middleware(['auth', 'verified'])->name('contactapplication');
Route::get('/contactapplication/{id}',[ContactApplicationController::class,'show'])->middleware('auth', 'verified');





//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
