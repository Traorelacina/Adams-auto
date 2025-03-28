<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget;
use App\Models\User;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Support\Enums\IconPosition;
use Illuminate\Database\Eloquent\Builder;

class TopUsersTable extends TableWidget
{
    protected static ?int $sort = 3;
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(function (): Builder {
                return User::query()
                    ->select(['users.id', 'users.name', 'users.email'])
                    ->withCount(['pageViews as views' => function (Builder $query) {
                        $query->where('page_url', '/');
                    }])
                    ->has('pageViews')
                    ->orderBy('views', 'desc');
            })
            ->columns([
                TextColumn::make('name')
                    ->label('Utilisateur')
                    ->searchable()
                    ->sortable()
                    ->icon('heroicon-o-user')
                    ->iconPosition(IconPosition::After),
                    
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable()
                    ->icon('heroicon-o-envelope'),
                    
                TextColumn::make('views')
                    ->label('Vues accueil')
                    ->numeric()
                    ->sortable()
                    ->icon('heroicon-o-eye')
                    ->color(function ($record) {
                        return match (true) {
                            $record->views > 100 => 'success',
                            $record->views > 50 => 'info',
                            $record->views > 20 => 'warning',
                            default => 'danger',
                        };
                    }),
            ])
            ->paginated([10, 25, 50])
            ->defaultSort('views', 'desc');
    }

    protected function getTableHeading(): string
    {
        return 'Top Utilisateurs - Page d\'Accueil';
    }

    protected function getTableDescription(): ?string
    {
        return 'Classement des utilisateurs avec le plus de vues sur la page d\'accueil';
    }
}