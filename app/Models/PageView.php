<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Torann\GeoIP\Facades\GeoIP;
use Jenssegers\Agent\Agent;

class PageView extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'page_url',
        'ip_address',
        'user_agent',
        'referrer',
        'country',
        'country_code',
        'city',
        'state',
        'device_type',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public static function track(string $pageUrl): self
    {
        $ip = request()->ip();
        $agent = new Agent(); // Instanciation avant utilisation
        
        return self::create([
            'user_id' => auth()->id(),
            'page_url' => $pageUrl,
            'ip_address' => $ip,
            'user_agent' => request()->userAgent(),
            'referrer' => request()->header('referer'),
            'country' => optional(GeoIP::getLocation($ip))->country,
            'country_code' => optional(GeoIP::getLocation($ip))->iso_code,
            'city' => optional(GeoIP::getLocation($ip))->city,
            'state' => optional(GeoIP::getLocation($ip))->state,
            'device_type' => self::getDeviceType($agent),
        ]);
    }

    protected static function getDeviceType(Agent $agent): string
    {
        return match (true) {
            $agent->isMobile() => 'mobile',
            $agent->isTablet() => 'tablet',
            $agent->isDesktop() => 'desktop',
            $agent->isRobot() => 'robot',
            default => 'other',
        };
    }

    public function scopeHomepage($query)
    {
        return $query->where('page_url', '/');
    }

    public function scopeForPeriod($query, string $period)
    {
        return match ($period) {
            'today' => $query->whereDate('created_at', today()),
            'week' => $query->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]),
            'month' => $query->whereMonth('created_at', now()->month),
            'year' => $query->whereYear('created_at', now()->year),
            default => $query,
        };
    }
}