<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RentalResource\Pages;
use App\Models\Rental;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class RentalResource extends Resource
{
    protected static ?string $model = Rental::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar'; // Icône pour la navigation
    protected static ?string $navigationLabel = 'Réservations de location'; // Libellé de la navigation
    protected static ?string $modelLabel = 'Réservation de location'; // Libellé du modèle
    protected static ?string $navigationGroup = 'Gestion des transactions'; // Groupe de navigation

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Formulaire pour ajouter/modifier une réservation de location
                Forms\Components\Select::make('user_id')
                    ->label('Client')
                    ->relationship('user', 'name') // Relation avec le modèle User
                    ->required(),
                Forms\Components\Select::make('car_id')
                    ->label('Voiture')
                    ->relationship('car', 'modele') // Relation avec le modèle Car
                    ->required(),
                Forms\Components\DatePicker::make('start_date')
                    ->label('Date de début')
                    ->required(),
                Forms\Components\DatePicker::make('end_date')
                    ->label('Date de fin')
                    ->required()
                    ->afterOrEqual('start_date'),
                Forms\Components\Select::make('statut')
                    ->label('Statut')
                    ->options([
                        'en attente' => 'En attente',
                        'confirmé' => 'Confirmé',
                        'terminé' => 'Terminé',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Colonnes du tableau
                TextColumn::make('user.name')
                    ->label('Client')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('car.modele')
                    ->label('Voiture')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('start_date')
                    ->label('Date de début')
                    ->date()
                    ->sortable(),
                TextColumn::make('end_date')
                    ->label('Date de fin')
                    ->date()
                    ->sortable(),
                TextColumn::make('statut')
                    ->label('Statut')
                    ->sortable(),
            ])
            ->filters([
                // Filtres pour le tableau
                SelectFilter::make('statut')
                    ->label('Statut')
                    ->options([
                        'en attente' => 'En attente',
                        'confirmé' => 'Confirmé',
                        'terminé' => 'Terminé',
                    ]),
                Filter::make('date_range')
                    ->label('Filtrer par date')
                    ->form([
                        Forms\Components\DatePicker::make('start_date')
                            ->label('Date de début'),
                        Forms\Components\DatePicker::make('end_date')
                            ->label('Date de fin'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['start_date'],
                                fn (Builder $query, $date): Builder => $query->whereDate('start_date', '>=', $date),
                            )
                            ->when(
                                $data['end_date'],
                                fn (Builder $query, $date): Builder => $query->whereDate('end_date', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                // Actions disponibles pour chaque ligne
                Tables\Actions\EditAction::make(), // Modifier une réservation
                Tables\Actions\DeleteAction::make(), // Supprimer une réservation
            ])
            ->bulkActions([
                // Actions groupées
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(), // Supprimer plusieurs réservations
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Relations avec d'autres ressources (optionnel)
        ];
    }

    public static function getPages(): array
    {
        return [
            // Pages de la ressource
            'index' => Pages\ListRentals::route('/'), // Liste des réservations
            'create' => Pages\CreateRental::route('/create'), // Formulaire de création
            'edit' => Pages\EditRental::route('/{record}/edit'), // Formulaire de modification
        ];
    }
}