<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class UsersListWidget extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(User::query()->withCount('pageViews'))
            ->columns([
                Tables\Columns\ImageColumn::make('avatar')
                    ->label('')
                    ->circular()
                    ->size(40)
                    ->defaultImageUrl(fn ($record) => 'https://ui-avatars.com/api/?name='.urlencode($record->name).'&color=FFFFFF&background=4f46e5&bold=true'),
                
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom Complet')
                    ->searchable()
                    ->sortable()
                    ->weight('medium')
                    ->color('gray-800'),
                
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->icon('heroicon-o-envelope')
                    ->color('gray-600'),
                
                Tables\Columns\TextColumn::make('phone')
                    ->label('Téléphone')
                    ->searchable()
                    ->icon('heroicon-o-device-phone-mobile'),
                
                Tables\Columns\TextColumn::make('page_views_count')
                    ->label('Activité')
                    ->numeric()
                    ->sortable()
                    ->icon('heroicon-o-chart-bar'),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Inscrit Depuis')
                    ->dateTime('d/m/Y')
                    ->sortable()
                    ->description(fn ($record) => $record->created_at->diffForHumans())
                    ->icon('heroicon-o-clock'),
            ])
            ->actions([
                Tables\Actions\Action::make('edit')
                    ->url(fn (User $record): string => route('filament.admin.resources.users.edit', $record))
                    ->icon('heroicon-o-pencil')
                    ->color('gray-600'),
            ])
            ->emptyStateHeading('Aucun utilisateur enregistré')
            ->emptyStateDescription('Les nouveaux utilisateurs apparaîtront ici')
            ->emptyStateIcon('heroicon-o-user-group')
            ->emptyStateActions([
                Tables\Actions\Action::make('create')
                    ->label('Ajouter un utilisateur')
                    ->url(route('filament.admin.resources.users.create'))
                    ->icon('heroicon-o-plus')
                    ->button(),
            ])
            ->deferLoading()
            ->striped()
            ->paginated([10, 25, 50]);
    }

    public static function getHeading(): string
    {
        return 'Utilisateurs du Système';
    }

    public static function canView(): bool
    {
        return auth()->user()->can('viewAny', User::class);
    }
}