<?php

namespace App\Filament\Resources\Urls\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UrlsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('url')
                    ->label('Link')
                    ->copyable()
                    ->limit(50),

                TextColumn::make('short')
                    ->label('Short URL')
                    ->state(fn ($record) => route('short.redirect', $record->short))
                    ->url(fn ($record) => route('short.redirect', $record->short), shouldOpenInNewTab: true)
                    ->copyable(),

                TextColumn::make('created_at')
                    ->dateTime('d.m.Y H:i'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
