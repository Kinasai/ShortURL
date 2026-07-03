<?php

namespace App\Filament\Resources\Urls\Pages;

use App\Filament\Resources\Urls\RelationManagers\LogsRelationManager;
use App\Filament\Resources\Urls\UrlResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\ViewRecord;

class ViewUrl extends ViewRecord
{
    protected static string $resource = UrlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    public static function getRelations(): array
    {
        return [
            LogsRelationManager::class,
        ];
    }
}
