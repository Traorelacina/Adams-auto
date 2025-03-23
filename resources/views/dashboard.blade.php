<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>



    <section id="cars" class="popular-cars">
    <div class="container">
        <!-- Section des voitures à vendre -->
        <div class="sale-section animated-fade">
            <div class="section-title">
                <h2>Voitures à Vendre</h2>
            </div>
            <div class="cars-grid">
                <livewire:cars-for-sale />
            </div>
          
        </div>
        
        <!-- Section des voitures à louer -->
        <div class="rent-section animated-fade" style="margin-top: 80px;">
            <div class="section-title">
                <h2>Voitures à Louer</h2>
            </div>
            <div class="cars-grid">
                @livewire('cars-for-rent')
            </div>
            
        </div>
    </div>
</section>

</x-app-layout>
