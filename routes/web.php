<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');
Route::get('/portals', [App\Http\Controllers\PageController::class, 'portals'])->name('portals');
Route::get('/marine_shipbuilding', [App\Http\Controllers\PageController::class, 'marine_shipbuilding'])->name('marine_shipbuilding');
Route::get('/power_generation', [App\Http\Controllers\PageController::class, 'power_generation'])->name('power_generation');
Route::get('/oil_gas', [App\Http\Controllers\PageController::class, 'oil_gas'])->name('oil_gas');
Route::get('/Industrial_Solutions', [App\Http\Controllers\PageController::class, 'Industrial_Solutions'])->name('Industrial_Solutions');
Route::get('/News_Articles', [App\Http\Controllers\PageController::class, 'News_Articles'])->name('News_Articles');
Route::get('/case_study', [App\Http\Controllers\PageController::class, 'case_study'])->name('case_study');
Route::get('/exhibitions', [App\Http\Controllers\PageController::class, 'exhibitions'])->name('exhibitions');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/investors', [App\Http\Controllers\PageController::class, 'investors'])->name('investors');
Route::get('/suppliers', [App\Http\Controllers\PageController::class, 'suppliers'])->name('suppliers');
Route::get('/contact_information', [App\Http\Controllers\PageController::class, 'contact_information'])->name('contact_information');
Route::get('/gallery_foto', [App\Http\Controllers\PageController::class, 'gallery_foto'])->name('gallery_foto');
Route::get('/gallery_video', [App\Http\Controllers\PageController::class, 'gallery_video'])->name('gallery_video');
Route::get('/test-image', function () {
    $homeSetting = \App\Models\HomeSettings::first();
    return view('test-image', compact('homeSetting'));
});
