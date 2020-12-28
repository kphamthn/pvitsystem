<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\SetLocaleMiddleware;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/locale/{locale}', [HomeController::class, 'setlocale'])->name('setlocale');
Route::middleware([SetLocaleMiddleware::class])->group(function () {
   Route::get('/', [HomeController::class, 'home'])->name('home');
   Route::get('/about', [HomeController::class, 'about'])->name('aboutme');
   Route::get('/product', [HomeController::class, 'service'])->name('service');
   Route::get('/contact', [ContactController::class, 'index'])->name('contact');
   Route::post('/contact', [ContactController::class, 'post'])->name('post_contact');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
