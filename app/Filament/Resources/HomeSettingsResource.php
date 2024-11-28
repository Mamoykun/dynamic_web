<?php
namespace App\Filament\Resources;

use App\Filament\Resources\HomeSettingsResource\Pages;
use App\Models\HomeSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;

class HomeSettingsResource extends Resource
{
    protected static ?string $model = HomeSettings::class;
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Pengaturan Home';
    protected static ?string $navigationGroup = 'Pengaturan Website';
    protected static ?string $slug = 'home-settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Hero Section')
                    ->schema([
                        Forms\Components\TextInput::make('hero_title')
                            ->label('Judul Hero')
                            ->required(),
                        Forms\Components\Textarea::make('hero_description')
                            ->label('Deskripsi Hero')
                            ->required(),
                        Forms\Components\FileUpload::make('hero_image')
                            ->label('Gambar Hero')
                            ->image()
                            ->disk('public')
                            ->directory('home')
                            ->visibility('public'),
                    ]),

                Forms\Components\Section::make('About Section')
                    ->schema([
                        Forms\Components\TextInput::make('about_title')
                            ->label('Judul About')
                            ->required(),
                        Forms\Components\RichEditor::make('about_description')
                            ->label('Deskripsi About')
                            ->required(),
                        Forms\Components\FileUpload::make('about_image')
                            ->label('Gambar About')
                            ->image()
                            ->disk('public')
                            ->directory('home')
                            ->visibility('public'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hero_title')
                    ->label('Judul Hero')
                    ->searchable(),
                ImageColumn::make('hero_image')
                    ->label('Gambar Hero')
                    ->disk('public')
                    // ->visibility('public')
                    ->size(100),
                    Tables\Columns\TextColumn::make('hero_description')
                    ->label('Hero Deskripsi'),
                    Tables\Columns\TextColumn::make('about_title')
                    ->label('Tentang Title'),
                    Tables\Columns\TextColumn::make('updated_at')
                    ->label('Terakhir Diupdate')
                    ->dateTime(),
                    // ->url(fn ($record) => asset('storage/' . $record->hero_image)), // Tambahkan ini
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomeSettings::route('/'),
            'create' => Pages\CreateHomeSettings::route('/create'),
            'edit' => Pages\EditHomeSettings::route('/{record}/edit'),
        ];
    }
}