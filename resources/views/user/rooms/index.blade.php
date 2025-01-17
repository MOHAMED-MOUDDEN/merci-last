@extends('client.layout')

@section('content')
<style>
    /* تنسيق الحاوية */
    .container {
        max-width: 1200px;
        margin: auto;
    }

    /* عنوان الصفحة */
    h1 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 2rem;
    }

    /* تصميم البطاقات */
    .card {
        border: none;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
    }

    /* النصوص داخل البطاقات */
    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #2c3e50;
    }

    .card-text {
        font-size: 0.95rem;
        color: #7f8c8d;
    }

    .text-primary {
        font-size: 1.2rem;
        font-weight: bold;
    }

    /* الأزرار */
    .btn-primary {
        background-color: #007bff;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    /* تصنيف النجوم والإشعارات */
    .bg-warning {
        font-size: 0.85rem;
        font-weight: bold;
    }

    .bg-danger {
        font-size: 0.85rem;
        font-weight: bold;
    }

    /* عرض الصور داخل البطاقات */
    .room-img {
        height: 200px;
        object-fit: cover;
    }

    /* فلتر الغرف */
    form .form-control {
        border-radius: 10px;
        height: 45px;
        font-size: 0.95rem;
        padding: 0.5rem 1rem;
    }

    /* التباعد بين العناصر */
    .mb-4 {
        margin-bottom: 1.5rem !important;
    }
</style>

<div class="container">
    <!-- فلتر الغرف -->
    <div class="mb-4">
        <form class="row">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Rechercher par nom" id="roomName">
            </div>
            <div class="col-md-4">
                <select class="form-control" id="roomPrice">
                    <option value="">Prix</option>
                    <option value="0-50">0 - 50 MAD</option>
                    <option value="50-100">50 - 100 MAD</option>
                    <option value="100+">100 MAD+</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-control" id="roomAvailability">
                    <option value="">Disponibilité</option>
                    <option value="available">Disponible</option>
                    <option value="unavailable">Indisponible</option>
                </select>
            </div>
        </form>
    </div>

    <h1 class="text-center mb-4">Toutes les chambres</h1>
    <div class="row" id="roomsList">
        @foreach($rooms as $room)
        <div class="col-md-6 col-lg-4 col-sm-12 mb-4 room-item">
            <div class="card shadow-lg border-0 rounded-lg h-100">
                <div class="position-relative">
                    <img src="{{ asset($room->images->first()->image_path ?? 'https://via.placeholder.com/400x300') }}" class="card-img-top rounded-top room-img" alt="{{ $room->name }}">
                    @if($room->rating)
                        <div class="position-absolute top-0 start-0 m-3 bg-warning text-white p-2 rounded">
                            <i class="fas fa-star"></i> {{ $room->rating }}
                        </div>
                    @endif
                    @if(!$room->available)
                        <div class="position-absolute top-0 end-0 m-3 bg-danger text-white p-2 rounded">
                            Indisponible
                        </div>
                    @endif
                </div>

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-dark">{{ $room->name }}</h5>
                    <p class="card-text text-muted mb-3">{{ Str::limit($room->description, 90) }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-dark font-weight-bold">
                            <span class="text-primary">{{ $room->price }} MAD</span> / nuit
                        </p>
                        <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-primary">Détails</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
<script>
    // الفلاتر
    document.getElementById('roomName').addEventListener('input', function(e) {
        filterRooms();
    });
    document.getElementById('roomPrice').addEventListener('change', function(e) {
        filterRooms();
    });
    document.getElementById('roomAvailability').addEventListener('change', function(e) {
        filterRooms();
    });

    function filterRooms() {
        const name = document.getElementById('roomName').value.toLowerCase();
        const priceRange = document.getElementById('roomPrice').value;
        const availability = document.getElementById('roomAvailability').value;

        const rooms = document.querySelectorAll('.room-item');
        rooms.forEach(function(room) {
            const roomName = room.querySelector('.card-title').textContent.toLowerCase();
            const roomPrice = room.querySelector('.text-primary').textContent;
            const roomAvailable = room.querySelector('.bg-danger') ? false : true;

            let matches = true;

            if (name && !roomName.includes(name)) {
                matches = false;
            }
            if (priceRange && !filterByPrice(roomPrice, priceRange)) {
                matches = false;
            }
            if (availability && ((availability === 'available' && !roomAvailable) || (availability === 'unavailable' && roomAvailable))) {
                matches = false;
            }

            room.style.display = matches ? '' : 'none';
        });
    }

    function filterByPrice(price, range) {
        const priceValue = parseFloat(price.replace(' MAD', '').trim());
        if (range === '0-50') return priceValue <= 50;
        if (range === '50-100') return priceValue > 50 && priceValue <= 100;
        if (range === '100+') return priceValue > 100;
        return true;
    }
</script>
@endsection
