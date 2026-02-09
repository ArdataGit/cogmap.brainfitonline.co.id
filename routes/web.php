<?php

use App\Http\Controllers\InformationSessionController;
use Illuminate\Support\Facades\Route;

// Route dengan locale dan CSP middleware
Route::middleware(['locale', \App\Http\Middleware\ContentSecurityPolicy::class])->group(function () {
    
    // Homepage
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    
    // Thank You Page
    Route::get('/thank-you', function () {
        return view('thank-you');
    })->name('thank.you');
  
    // Homepage
   // Route::get('/holiday', function () {
   // })->name('holisday');
    
    
});

// API Route untuk form submission (tanpa CSP jika perlu, atau bisa ditambahkan juga)
Route::post('/send-information-session', [InformationSessionController::class, 'send'])
    ->middleware('locale')
    ->name('send.information.session');