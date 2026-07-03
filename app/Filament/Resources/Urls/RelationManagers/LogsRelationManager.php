<?php

namespace App\Filament\Resources\Urls\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LogsRelationManager extends RelationManager
{
    protected static string $relationship = 'logs';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                ->label('Date')
                ->dateTime('d.m.Y H:i:s'),

                TextColumn::make('ip')->label('IP'),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
