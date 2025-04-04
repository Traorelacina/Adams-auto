<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Pages\Page;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;

class UserListPage extends Page implements HasTable
{
    use InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Liste des Utilisateurs';
    protected static string $view = 'filament.pages.user-list-page';

    public function table(Table $table): Table
    {
        return $table
            ->query(User::query())
            ->columns([
                ImageColumn::make('avatar')
                    ->label('')
                    ->circular()
                    ->defaultImageUrl(fn ($record) => 'https://ui-avatars.com/api/?name='.urlencode($record->name).'&color=FFFFFF&background=4f46e5'),
                
                TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('phone')
                    ->label('Téléphone')
                    ->searchable(),
                
                TextColumn::make('created_at')
                    ->label('Inscrit le')
                    ->dateTime('d/m/Y')
                    ->sortable(),
            ])
            ->filters([
                // Vos filtres ici
            ])
            ->actions([
                // Vos actions ici
            ])
            ->bulkActions([
                // Actions groupées ici
            ]);
    }

    public function getTitle(): string
    {
        return 'Liste des Utilisateurs';
    }
}