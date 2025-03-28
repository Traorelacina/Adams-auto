<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use App\Models\PageView;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $homepageViews = PageView::where('page_url', '/')->count();
        $homepageViewsThisMonth = PageView::where('page_url', '/')
            ->whereMonth('created_at', now()->month)
            ->count();

        return [
            Stat::make('Vues accueil', $homepageViews)
                ->description('Total des vues sur la page d\'accueil')
                ->chart($this->getHomepageViewsTrend())
                ->color('success'),
                
            Stat::make('Vues ce mois', $homepageViewsThisMonth)
                ->description('Sur la page d\'accueil')
                ->chart($this->getHomepageViewsMonthlyTrend())
                ->color('primary'),
                
            Stat::make('Utilisateurs uniques', PageView::where('page_url', '/')->distinct('user_id')->count())
                ->description('Sur la page d\'accueil')
                ->color('info'),
        ];
    }

    protected function getHomepageViewsTrend(): array
    {
        // Retourne les données pour le graphique
        return [15, 40, 25, 33, 42, 44, 52];
    }

    protected function getHomepageViewsMonthlyTrend(): array
    {
        // Retourne les données pour le graphique mensuel
        return [5, 10, 8, 12, 15, 18, 20];
    }
}