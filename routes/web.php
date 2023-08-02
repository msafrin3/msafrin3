<?php

use App\Http\Controllers\DefaultController;
use App\Http\Controllers\DisasterController;
use App\Http\Controllers\FeedbackController;
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

Route::get('test-mail', function() {
    return view('email.contact');
});

Route::get('/', [DefaultController::class, 'index'])->name('index');

Route::post('/contact', [FeedbackController::class, 'store'])->name('contact.store');

Route::resource('disaster', DisasterController::class);
