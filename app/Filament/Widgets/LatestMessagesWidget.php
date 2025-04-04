<?php

namespace App\Filament\Widgets;

use App\Models\ContactMessage;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class LatestMessagesWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Messages non lus', ContactMessage::where('is_read', false)->count())
                ->description('Nouveaux messages')
                ->descriptionIcon('heroicon-o-envelope')
                ->color('danger')
                ->url(route('filament.admin.resources.contact-messages.index')),
                
            Stat::make('Total messages', ContactMessage::count())
                ->description('Depuis la création')
                ->descriptionIcon('heroicon-o-chat-bubble-left-ellipsis')
                ->color('success'),
        ];
    }

    public static function canView(): bool
    {
        return auth()->user()->can('view_contact_messages');
    }
}