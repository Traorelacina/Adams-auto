<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PurchaseResource\Pages;
use App\Models\Purchase;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class PurchaseResource extends Resource
{
    protected static ?string $model = Purchase::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart'; // Icône pour la navigation
    protected static ?string $navigationLabel = 'Demandes d\'achat'; // Libellé de la navigation
    protected static ?string $modelLabel = 'Demande d\'achat'; // Libellé du modèle
    protected static ?string $navigationGroup = 'Gestion des transactions'; // Groupe de navigation

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Formulaire pour ajouter/modifier une demande d'achat
                Forms\Components\Select::make('user_id')
                    ->label('Client')
                    ->relationship('user', 'name') // Relation avec le modèle User
                    ->required(),
                Forms\Components\Select::make('car_id')
                    ->label('Voiture')
                    ->relationship('car', 'modele') // Relation avec le modèle Car
                    ->required(),
                Forms\Components\TextInput::make('nom')
                    ->label('Nom du client')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telephone')
                    ->label('Téléphone')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('message')
                    ->label('Message')
                    ->columnSpanFull(),
                Forms\Components\Select::make('statut')
                    ->label('Statut')
                    ->options([
                        'en attente' => 'En attente',
                        'confirmé' => 'Confirmé',
                        'annulé' => 'Annulé',
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
                TextColumn::make('nom')
                    ->label('Nom')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('telephone')
                    ->label('Téléphone')
                    ->sortable()
                    ->searchable(),
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
                        'annulé' => 'Annulé',
                    ]),
            ])
            ->actions([
                // Actions disponibles pour chaque ligne
                Tables\Actions\EditAction::make(), // Modifier une demande d'achat
                Tables\Actions\DeleteAction::make(), // Supprimer une demande d'achat
            ])
            ->bulkActions([
                // Actions groupées
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(), // Supprimer plusieurs demandes d'achat
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
            'index' => Pages\ListPurchases::route('/'), // Liste des demandes d'achat
            'create' => Pages\CreatePurchase::route('/create'), // Formulaire de création
            'edit' => Pages\EditPurchase::route('/{record}/edit'), // Formulaire de modification
        ];
    }
}