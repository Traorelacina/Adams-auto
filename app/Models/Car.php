<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque',
        'modele',
        'annee',
        'prix',
        'carburant',
        'kilometrage',
        'description',
        'photos',
        'statut',
        'type',
    ];

    protected $casts = [
        'photos' => 'array',
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}