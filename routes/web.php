<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('welcome');
Route::get('/portals', [App\Http\Controllers\PageController::class, 'portals'])->name('portals');
Route::get('/marine_shipbuilding', [App\Http\Controllers\PageController::class, 'marine_shipbuilding'])->name('marine_shipbuilding');
Route::get('/power_generation', [App\Http\Controllers\PageController::class, 'power_generation'])->name('power_generation');
Route::get('/oil_gas', [App\Http\Controllers\PageController::class, 'oil_gas'])->name('oil_gas');
Route::get('/News_Articles', [App\Http\Controllers\PageController::class, 'News_Articles'])->name('News_Articles');
Route::get('/case_study', [App\Http\Controllers\PageController::class, 'case_study'])->name('case_study');
Route::get('/exhibitions', [App\Http\Controllers\PageController::class, 'exhibitions'])->name('exhibitions');
Route::get('/test-image', function () {
    $homeSetting = \App\Models\HomeSettings::first();
    return view('test-image', compact('homeSetting'));
});
