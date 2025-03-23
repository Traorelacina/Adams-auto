<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck'; // Icône pour la navigation
    protected static ?string $navigationLabel = 'Voitures'; // Libellé de la navigation
    protected static ?string $modelLabel = 'Voiture'; // Libellé du modèle
    protected static ?string $navigationGroup = 'Gestion des véhicules'; // Groupe de navigation

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Formulaire pour ajouter/modifier une voiture
                Forms\Components\TextInput::make('marque')
                    ->label('Marque')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('modele')
                    ->label('Modèle')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('annee')
                    ->label('Année')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('prix')
                    ->label('Prix (FCFA)')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('carburant')
                    ->label('Carburant')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kilometrage')
                    ->label('Kilométrage')
                    ->numeric()
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('photos')
                    ->label('Photos')
                    ->multiple()
                    ->directory('cars')
                    ->image()
                    ->columnSpanFull(),
                Forms\Components\Select::make('type')
                    ->label('Type de voiture')
                    ->options([
                        'vente' => 'À vendre',
                        'location' => 'En location',
                    ])
                    ->required(),
                Forms\Components\Select::make('statut')
                    ->label('Statut')
                    ->options([
                        'disponible' => 'Disponible',
                        'vendu' => 'Vendu',
                        'loué' => 'Loué',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Colonnes du tableau
                TextColumn::make('marque')
                    ->label('Marque')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('modele')
                    ->label('Modèle')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('annee')
                    ->label('Année')
                    ->sortable(),
                TextColumn::make('prix')
                    ->label('Prix (FCFA)')
                    ->money('xof')
                    ->sortable(),
                TextColumn::make('carburant')
                    ->label('Carburant')
                    ->sortable(),
                TextColumn::make('kilometrage')
                    ->label('Kilométrage')
                    ->sortable(),
                TextColumn::make('type')
                    ->label('Type')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('statut')
                    ->label('Statut')
                    ->sortable(),
            ])
            ->filters([
                // Filtres pour le tableau
                SelectFilter::make('type')
                    ->label('Type de voiture')
                    ->options([
                        'vente' => 'À vendre',
                        'location' => 'En location',
                    ]),
                SelectFilter::make('statut')
                    ->label('Statut')
                    ->options([
                        'disponible' => 'Disponible',
                        'vendu' => 'Vendu',
                        'loué' => 'Loué',
                    ]),
            ])
            ->actions([
                // Actions disponibles pour chaque ligne
                Tables\Actions\EditAction::make(), // Modifier une voiture
                Tables\Actions\DeleteAction::make(), // Supprimer une voiture
            ])
            ->bulkActions([
                // Actions groupées
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(), // Supprimer plusieurs voitures
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
            'index' => Pages\ListCars::route('/'), // Liste des voitures
            'create' => Pages\CreateCar::route('/create'), // Formulaire de création
            'edit' => Pages\EditCar::route('/{record}/edit'), // Formulaire de modification
        ];
    }
}