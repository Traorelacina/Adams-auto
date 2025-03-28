<x-filament-widgets::widget>
    <x-filament::section 
        icon="heroicon-o-chart-bar" 
        icon-color="primary"
        heading="Top Utilisateurs - Page d'Accueil"
        description="Classement des utilisateurs les plus actifs sur la page d'accueil"
    >
        <div class="space-y-6">
            {{ $this->table }}
            
            <div class="text-xs text-gray-500 dark:text-gray-400">
                <span class="font-medium">Dernière mise à jour :</span> 
                {{ now()->translatedFormat('l j F Y à H:i') }}
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>