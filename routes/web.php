<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TechStoreController;

// Навчальні кейси
Route::get('/say/{message?}', [SiteController::class, 'say'])->name('site.say');
Route::get('/entry', [SiteController::class, 'entry'])->name('entry.form');
Route::post('/entry', [SiteController::class, 'entryStore'])->name('entry.store');

Route::view('/about', 'site.about')->name('site.about');
Route::view('/contact', 'site.contact')->name('site.contact');

// Індивідуальне завдання: Магазин комп'ютерної техніки
Route::get('/store', [TechStoreController::class, 'landing'])->name('store.landing');
Route::post('/store/consultation', [TechStoreController::class, 'storeConsultation'])->name('store.consultation');
