<?php

namespace App\Filament\Resources\Urls\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class UrlForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('user_id')
                    ->default(fn () => Auth::id()),

                TextInput::make('url')
                    ->label('link')
                    ->url()
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
