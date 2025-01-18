@extends('client.layout')

@section('content')
<div class="container">
<div class="min-h-screen bg-gray-100 px-4 py-8 md:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="bg-white rounded-xl shadow-sm p-6 md:p-8">
            <!-- Header Section -->
            <div class="mb-6">
                <span class="inline-block px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm font-medium mb-3">
                    Chambre Premium
                </span>
                <h1 class="text-3xl md:text-4xl font-semibold text-gray-900 mb-2">
                    {{ $room->name }}
                </h1>
                <div class="flex items-center gap-2 text-gray-600">
                    @for ($i = 0; $i < $room->stars; $i++)
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    @endfor
                </div>
            </div>

            <!-- Image Gallery -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="relative aspect-video rounded-lg overflow-hidden">
                    <img id="mainImage" src="{{ $room->images->first()->image_path ?? asset('images/default-room.jpg') }}" alt="Vue de la chambre" class="w-full h-full object-cover transition-opacity duration-300">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    @foreach ($room->images as $image)
                        <div onclick="changeImage('{{ $image->image_path }}')" class="relative aspect-video rounded-lg overflow-hidden cursor-pointer">
                            <img src="{{ $image->image_path }}" alt="Vue de la chambre" class="w-full h-full object-cover">
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Details Section -->
            <div class="grid md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div class="p-6 bg-gray-50 rounded-lg">
                        <h2 class="text-xl font-semibold mb-4">Description</h2>
                        <p class="text-gray-600 leading-relaxed">
                            {{ $room->description }}
                        </p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg">
                        <h2 class="text-xl font-semibold mb-4">Services inclus</h2>
                        <div class="grid grid-cols-2 gap-4">
                            @foreach (explode(',', $room->additional_info) as $info)
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">{{ trim($info) }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Pricing and Booking Section -->
                <div>
                    <div class="p-6 bg-gray-50 rounded-lg">
                        <div class="mb-6">
                            <h2 class="text-2xl font-semibold text-gray-900">
                                {{ number_format($room->price, 2) }} MAD
                                <span class="text-base font-normal text-gray-500"> / nuit</span>
                            </h2>
                        </div>
                        <a href="{{ route('user.rooms.book', $room->id) }}" class="w-full block text-center bg-blue-600 text-white py-3 rounded-lg text-lg font-medium hover:bg-blue-700">
                            Réserver maintenant
                        </a>
                        <p class="text-sm text-gray-500 text-center mt-4">
                            Annulation gratuite jusqu'à 24h avant l'arrivée
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Script to change the main image -->
<script>
    function changeImage(src) {
        document.getElementById('mainImage').src = src;
    }
</script>
@endsection
