<?php

namespace App\Filament\Resources\UtamaResource\Pages;

use App\Filament\Resources\UtamaResource;
use Filament\Resources\Pages\Page;

class Dashboard extends Page
{
    protected static string $resource = UtamaResource::class;

    protected static string $view = 'filament.resources.utama-resource.pages.dashboard';
}
