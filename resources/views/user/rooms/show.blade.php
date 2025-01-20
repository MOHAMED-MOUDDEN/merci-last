@extends('client.layout')

@section('content')
<style>
    .carousel-inner img {
        height: 600px;
        object-fit: cover;
        object-position: center;
    }

    .thumbnail {
        cursor: pointer;
        border: 2px solid transparent;
        padding: 2px;
        margin: 5px;
        transition: border-color 0.3s ease, transform 0.3s ease;
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 5px;
    }

    .thumbnail.active {
        border-color: blue;
        transform: scale(1.1);
    }

    .thumbnail + .thumbnail {
        margin-left: 10px;
    }
</style>

<!-- Carousel Section -->
<div id="roomCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($room->images as $index => $image)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <img src="{{ asset($image->image_path) }}" class="d-block w-100 rounded" alt="Room Image">
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

<!-- Thumbnails Section -->
<div class="d-flex justify-content-center">
    @foreach($room->images as $index => $image)
    <img src="{{ asset($image->image_path) }}" class="thumbnail {{ $index == 0 ? 'active' : '' }}"
         data-bs-slide-to="{{ $index }}" data-bs-target="#roomCarousel" alt="Thumbnail">
    @endforeach
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const thumbnails = document.querySelectorAll('.thumbnail');
        const carousel = document.querySelector('#roomCarousel');

        // Update active thumbnail when the carousel slides
        carousel.addEventListener('slide.bs.carousel', (event) => {
            // Log current slide for debugging
            console.log('Switching to slide:', event.to);

            // Remove 'active' class from all thumbnails
            thumbnails.forEach((thumbnail) => thumbnail.classList.remove('active'));

            // Add 'active' class to the thumbnail corresponding to the new slide
            thumbnails[event.to].classList.add('active');
        });

        // Add click event to thumbnails to manually change the slide
        thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', () => {
                const carouselInstance = bootstrap.Carousel.getInstance(carousel);
                carouselInstance.to(index); // Switch to the clicked slide
            });
        });

        // Set the first thumbnail as active on load
        if (thumbnails.length > 0) {
            thumbnails[0].classList.add('active');
        }
    });
</script>
@endsection
