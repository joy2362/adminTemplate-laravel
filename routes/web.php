<?php

use App\Http\Controllers\AdminController;
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
    return view('admin.pages.dashboard');
});
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/profiles', [AdminController::class, 'Profile'])->name('profile');
Route::get('/signing', [AdminController::class, 'signing'])->name('signing');
Route::get('/signup', [AdminController::class, 'signup'])->name('signup');
Route::get('/blank', [AdminController::class, 'blank'])->name('blank');
Route::get('/buttons', [AdminController::class, 'buttons'])->name('buttons');
Route::get('/forms', [AdminController::class, 'forms'])->name('forms');
Route::get('/cards', [AdminController::class, 'cards'])->name('cards');
Route::get('/typography', [AdminController::class, 'typography'])->name('typography');
Route::get('/icons', [AdminController::class, 'icons'])->name('icons');
Route::get('/charts', [AdminController::class, 'charts'])->name('charts');
Route::get('/maps', [AdminController::class, 'maps'])->name('maps');