<?php

namespace App\Filament\Resources\Urls\Widgets;

use App\Models\UrlLog;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class ClicksChart extends ChartWidget
{
    protected ?string $heading = 'Clicks in the last 30 days';

    protected function getData(): array
    {
        $labels = [];
        $data = [];

        foreach (range(29, 0) as $day) {
            $date = Carbon::today()->subDays($day);

            $labels[] = $date->format('d.m');

            $data[] = UrlLog::whereDate('created_at', $date)->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Clicks',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
