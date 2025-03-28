<?php

namespace App\Filament\Widgets;

use App\Models\PageView;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MonthlyViewsChart extends ChartWidget
{
    protected static ?string $heading = 'Statistiques des vues mensuelles';
    protected static ?int $sort = 2;
    protected static string $color = 'info';

    protected function getData(): array
    {
        // Requête pour récupérer les vues groupées par mois et année
        $views = PageView::select(
                DB::raw('YEAR(created_at) as year'),
                DB::raw('MONTH(created_at) as month'),
                DB::raw('COUNT(*) as count')
            )
            ->where('created_at', '>=', now()->subYear())
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get();

        // Préparation des labels (mois/année)
        $labels = $views->map(function ($item) {
            return Carbon::createFromDate($item->year, $item->month, 1)
                ->translatedFormat('M Y');
        });

        // Préparation des données
        $data = $views->pluck('count');

        return [
            'datasets' => [
                [
                    'label' => 'Nombre de vues',
                    'data' => $data,
                    'backgroundColor' => '#3b82f6',
                    'borderColor' => '#1d4ed8',
                    'fill' => true,
                    'tension' => 0.3,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line'; // Type de graphique : line, bar, pie, etc.
    }

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'title' => [
                        'display' => true,
                        'text' => 'Nombre de vues'
                    ]
                ],
                'x' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Mois'
                    ]
                ]
            ],
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'position' => 'top',
                ],
            ],
        ];
    }
}