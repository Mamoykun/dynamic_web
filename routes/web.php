<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('welcome');
Route::get('/portals', [App\Http\Controllers\PageController::class, 'portals'])->name('portals');
Route::get('/marine_shipbuilding', [App\Http\Controllers\PageController::class, 'marine_shipbuilding'])->name('marine_shipbuilding');
Route::get('/power_generation', [App\Http\Controllers\PageController::class, 'power_generation'])->name('power_generation');
Route::get('/oil_gas', [App\Http\Controllers\PageController::class, 'oil_gas'])->name('oil_gas');
Route::get('/test-image', function () {
    $homeSetting = \App\Models\HomeSettings::first();
    return view('test-image', compact('homeSetting'));
});
