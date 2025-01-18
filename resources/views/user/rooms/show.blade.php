@extends('client.layout')

@section('content')
<style>
    .carousel-item img {
        object-fit: cover;
        object-position: center center;
    }
    .img-thumbnail.active {
        border: 2px solid #007bff;
    }
</style>

<!-- Hero Section with Image Slider -->
<div id="roomCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($room->images as $index => $image)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <img src="{{ asset($image->image_path) }}" class="d-block w-100 rounded img-fluid" style="height: 600px; object-fit: cover;" alt="Room Image">
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Thumbnail Images Below Slider -->
<div class="d-flex justify-content-center gap-2 mb-5 thumbnails-container">
    @foreach($room->images as $index => $image)
    <img src="{{ asset($image->image_path) }}" onclick="selectSlide({{ $index }})" class="img-thumbnail {{ $index == 0 ? 'active' : '' }}" style="width: 100px; height: 80px; object-fit: cover; cursor: pointer;">
    @endforeach
</div>

<div class="container py-5">
    <div class="container bg-white p-4 rounded shadow-sm">
        <div class="row">
            <div class="col-md-8">
                <h2 class="font-weight-bold">{{ $room->name }}</h2>
                <div class="mb-3">
                    @for ($i = 0; $i < $room->stars; $i++)
                        <i class="fas fa-star text-warning"></i>
                    @endfor
                </div>
                <div class="card mb-4">
                    <div class="card-header bg-light font-weight-bold">Description</div>
                    <div class="card-body">
                        <p>{{ $room->description }}</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-light font-weight-bold">Services et Équipements</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 mb-2">
                                <i class="fas fa-wifi text-primary"></i> Wi-Fi gratuit
                            </div>
                            <div class="col-6 mb-2">
                                <i class="fas fa-glass-martini-alt text-primary"></i> Minibar
                            </div>
                            <div class="col-6 mb-2">
                                <i class="fas fa-lock text-primary"></i> Coffre-fort
                            </div>
                            <div class="col-6 mb-2">
                                <i class="fas fa-phone text-primary"></i> Service en chambre 24/7
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h3 class="font-weight-bold">{{ $room->price }} MAD <small class="text-muted">/ nuit</small></h3>
                        <p class="text-muted">Taxes et frais inclus</p>
                        <a href="{{ route('rooms.reserve', $room->id) }}" class="btn btn-primary btn-block mb-3">Réserver maintenant</a>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-success"></i> Annulation gratuite jusqu'à 24h avant l'arrivée</li>
                            <li><i class="fas fa-check text-success"></i> Paiement sécurisé</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function updateThumbnails(activeIndex) {
        const thumbnails = document.querySelectorAll('.img-thumbnail');
        thumbnails.forEach((thumbnail, index) => {
            thumbnail.classList.toggle('active', index === activeIndex);
        });
    }

    document.getElementById('roomCarousel').addEventListener('slide.bs.carousel', function (event) {
        updateThumbnails(event.to);
    });

    function selectSlide(index) {
        const carousel = document.getElementById('roomCarousel');
        const carouselInstance = bootstrap.Carousel.getInstance(carousel);
        carouselInstance.to(index);
        updateThumbnails(index);
    }
</script>
@endsection
