<?php

namespace App\Filament\Resources\Urls\Widgets;

use App\Models\Url;
use App\Models\UrlLog;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UrlStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Link count', Url::count())
                ->description('Total created')
                ->icon('heroicon-o-link'),

            Stat::make('Clicks', UrlLog::count())
                ->description('For all time')
                ->icon('heroicon-o-cursor-arrow-rays'),

            Stat::make(
                'Unique IP',
                UrlLog::distinct('ip')->count('ip')
            )->icon('heroicon-o-users'),

            Stat::make(
                'To day',
                UrlLog::whereDate('created_at', today())->count()
            )->icon('heroicon-o-calendar-days'),
        ];
    }
}
