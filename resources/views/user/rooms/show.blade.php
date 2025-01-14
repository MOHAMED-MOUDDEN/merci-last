@extends('client.layout')

@section('content')
<div class="container">
    <h1>{{ $room->name }}</h1>
    <div class="mb-3">
        <strong>عدد النجوم:</strong> {{ $room->stars }}
    </div>
    <div class="mb-3">
        <strong>السعر:</strong> {{ $room->price }} درهم
    </div>
    <div class="mb-3">
        <strong>الوصف:</strong>
        <p>{{ $room->description }}</p>
    </div>
    <div class="mb-3">
        <strong>معلومات إضافية:</strong>
        <p>{{ $room->additional_info }}</p>
    </div>
    <div class="row">
        @foreach($room->images as $image)
        <div class="col-md-4">
            <img src="{{ asset($image->image_path) }}" alt="Room Image" class="img-fluid">
        </div>
        @endforeach
    </div>

    <!-- زر الحجز -->
    <div class="mt-4">
        <a href="{{ route('rooms.reserve', $room->id) }}" class="btn btn-success">احجز الآن</a>
    </div>
</div>
@endsection
