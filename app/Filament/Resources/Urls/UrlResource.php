<?php

namespace App\Filament\Resources\Urls;

use App\Filament\Resources\Urls\Pages\CreateUrl;
use App\Filament\Resources\Urls\Pages\EditUrl;
use App\Filament\Resources\Urls\Pages\ListUrls;
use App\Filament\Resources\Urls\Pages\ViewUrl;
use App\Filament\Resources\Urls\RelationManagers\LogsRelationManager;
use App\Filament\Resources\Urls\Schemas\UrlInfolist;
use App\Models\Url;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UrlResource extends Resource
{
    protected static ?string $model = Url::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Url';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('url')
                ->url()
                ->required(),

            TextInput::make('short')
                ->disabled()
                ->dehydrated(),
        ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return UrlInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('url')
                    ->label('Link')
                    ->limit(50)
                    ->searchable(),

                TextColumn::make('short')
                    ->label('Short URL')
                    ->state(fn ($record) => route('short.redirect', $record->short))
                    ->url(fn ($record) => route('short.redirect', $record->short), shouldOpenInNewTab: true)
                    ->copyable(),

                TextColumn::make('logs_count')
                    ->counts('logs')
                    ->label('Clicks'),

                TextColumn::make('created_at')
                    ->dateTime('d.m.Y H:i:s'),
            ])
            ->recordActions([
                ViewAction::make(),
                DeleteAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            LogsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUrls::route('/'),
            'create' => CreateUrl::route('/create'),
            'view' => ViewUrl::route('/{record}'),
            'edit' => EditUrl::route('/{record}/edit'),
        ];
    }
}
