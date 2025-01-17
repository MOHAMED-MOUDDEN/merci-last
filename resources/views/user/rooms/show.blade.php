@extends('client.layout')

@section('content')
<div class="min-h-screen bg-[#f5f5f5]">
    <!-- Hero Section with Main Image -->
    <div class="relative h-[60vh] w-full overflow-hidden bg-black/10">
        <div class="relative">
            <!-- Main Image -->
            <img src="{{ asset($room->images[$selectedImage ?? 0]->image_path) }}" alt="Vue principale de la chambre" class="w-full max-h-[60vh] object-cover">

            <!-- Image Navigation -->
            <div class="absolute inset-0 flex items-center justify-between p-4">
                <button class="rounded-full bg-white/80 hover:bg-white" onclick="prevImage()">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </button>
                <button class="rounded-full bg-white/80 hover:bg-white" onclick="nextImage()">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18l6-6-6-6" />
                    </svg>
                </button>
            </div>

            <!-- Thumbnail Navigation -->
            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                @foreach ($room->images as $index => $image)
                    <button onclick="setSelectedImage({{ $index }})" class="w-2 h-2 rounded-full {{ $selectedImage == $index ? 'bg-white w-4' : 'bg-white/50' }}"></button>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="max-w-7xl mx-auto px-4 py-8 md:px-8">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="md:col-span-2 space-y-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $room->name }}</h1>
                <div class="flex items-center gap-1 mb-4">
                    @for ($i = 0; $i < $room->stars; $i++)
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    @endfor
                </div>

                <!-- Description Card -->
                <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                    <div class="border-b pb-4 mb-4">
                        <h2 class="text-xl font-semibold text-gray-800">Description</h2>
                    </div>
                    <p class="text-gray-600 leading-relaxed">{{ $room->description }}</p>
                </div>

                <!-- Amenities Card -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="border-b pb-4 mb-4">
                        <h2 class="text-xl font-semibold text-gray-800">Services et Équipements</h2>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($amenities as $amenity)
                            <div class="flex items-center gap-3">
                                <svg class="h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 14h-2v-4h2v4zm0-6h-2V7h2v3z" />
                                </svg>
                                <span class="text-gray-600">{{ $amenity['text'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Booking Card -->
            <div class="md:col-span-1">
                <div class="bg-white p-6 rounded-lg shadow-lg sticky top-8">
                    <div class="border-b pb-4 mb-4">
                        <h2 class="text-xl font-semibold text-gray-800">
                            {{ $room->price }} MAD
                            <span class="text-base font-normal text-gray-500"> / nuit</span>
                        </h2>
                        <p class="text-sm text-gray-500">Taxes et frais inclus</p>
                    </div>
                    <form method="POST" action="{{ route('rooms.book', $room->id) }}">
                        @csrf
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white p-3 rounded-md">
                            Réserver maintenant
                        </button>
                    </form>
                    <div class="text-sm text-gray-500 space-y-2 mt-4">
                        <div class="flex items-center gap-2">
                            <svg class="h-4 w-4 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 18l6-6-6-6" />
                            </svg>
                            <span>Annulation gratuite jusqu'à 24h avant l'arrivée</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="h-4 w-4 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 18l6-6-6-6" />
                            </svg>
                            <span>Paiement sécurisé</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let selectedImage = 0; // تعيين صورة أولية افتراضية
    const images = @json($room->images);

    function nextImage() {
        selectedImage = (selectedImage + 1) % images.length;
        document.querySelector("img").src = images[selectedImage].image_path;
    }

    function prevImage() {
        selectedImage = (selectedImage - 1 + images.length) % images.length;
        document.querySelector("img").src = images[selectedImage].image_path;
    }

    function setSelectedImage(index) {
        selectedImage = index;
        document.querySelector("img").src = images[selectedImage].image_path;
    }
</script>
@endsection
