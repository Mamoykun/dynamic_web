<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PageController::class, 'home']);
Route::get('/debug-image', function () {
    $homeSetting = \App\Models\HomeSettings::first();
    dd([
        'hero_image_path' => $homeSetting->hero_image,
        'hero_image_exists' => Storage::disk('public')->exists($homeSetting->hero_image),
        'full_url' => Storage::disk('public')->url($homeSetting->hero_image),
        'storage_path' => storage_path('app/public/' . $homeSetting->hero_image),
        'public_path' => public_path('storage/' . $homeSetting->hero_image),
    ]);
});
Route::get('/test-image', function () {
    $homeSetting = \App\Models\HomeSettings::first();
    return view('test-image', compact('homeSetting'));
});
