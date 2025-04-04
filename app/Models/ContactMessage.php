<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'email', 
        'telephone',
        'sujet',
        'message',
        'is_read'
    ];

    /**
     * Les attributs qui devraient être castés.
     *
     * @var array
     */
    protected $casts = [
        'is_read' => 'boolean',
    ];

    /**
     * Scope pour les messages non lus.
     */
    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    /**
     * Marquer le message comme lu.
     */
    public function markAsRead()
    {
        $this->update(['is_read' => true]);
    }

    /**
     * Formatage de la date de création.
     */
    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('d/m/Y H:i');
    }
}