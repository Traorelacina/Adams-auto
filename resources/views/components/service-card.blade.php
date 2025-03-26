// resources/views/components/service-card.blade.php
<div class="service-card bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition-all">
    <div class="text-5xl text-blue-600 mb-4">
        <i class="{{ $icon }}"></i>
    </div>
    <h3 class="text-2xl font-bold mb-4">{{ $title }}</h3>
    <p class="text-gray-600 mb-6">{{ $description }}</p>
    <a href="{{ $route }}" class="text-blue-600 hover:text-blue-800 font-semibold">
        En savoir plus
    </a>
</div>