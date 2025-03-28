<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Configuration de base
    |--------------------------------------------------------------------------
    */
    'log_failures' => true,
    'include_currency' => false, // Désactivé car souvent inutile
    'service' => 'ipstack', // Service principal explicitement défini

    /*
    |--------------------------------------------------------------------------
    | Configuration des services
    |--------------------------------------------------------------------------
    */
    'services' => [
        'ipstack' => [
            'class' => \Torann\GeoIP\Services\IPApi::class,
            'secure' => true, // Force HTTPS
            'key' => env('GEOIP_API_KEY'), // Clé depuis .env
            'continent_path' => storage_path('app/continents.json'),
        ],

        // Vous pouvez garder les autres services commentés ou les supprimer
        'maxmind_database' => [
            'class' => \Torann\GeoIP\Services\MaxMindDatabase::class,
            'database_path' => storage_path('app/geoip.mmdb'),
            'update_url' => sprintf('https://download.maxmind.com/app/geoip_download?edition_id=GeoLite2-City&license_key=%s&suffix=tar.gz', env('MAXMIND_LICENSE_KEY')),
            'locales' => ['en'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Configuration du cache
    |--------------------------------------------------------------------------
    */
    'cache' => 'none', // Cache complètement désactivé
    'cache_tags' => null, // Tags désactivés
    'cache_expires' => 0, // Expiration à 0

    /*
    |--------------------------------------------------------------------------
    | Localisation par défaut (pour la France)
    |--------------------------------------------------------------------------
    */
    'default_location' => [
        'ip' => '127.0.0.0',
        'iso_code' => 'FR',
        'country' => 'France',
        'city' => 'Paris',
        'state' => 'IDF',
        'state_name' => 'Île-de-France',
        'postal_code' => '75000',
        'lat' => 48.86,
        'lon' => 2.35,
        'timezone' => 'Europe/Paris',
        'continent' => 'EU',
        'default' => true,
        'currency' => 'EUR', // Ajout cohérent avec le pays
    ],
];