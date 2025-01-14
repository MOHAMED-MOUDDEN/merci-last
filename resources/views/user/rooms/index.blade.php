@extends('client.layout')

@section('content')
<div class="container">
    <h1>جميع الغرف</h1>
    <div class="row">
        @foreach($rooms as $room)
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="{{ $room->images->first() ?$room->images->first()->image_path) : 'https://via.placeholder.com/300' }}" class="card-img-top" alt="{{ $room->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $room->name }}</h5>
                    <p class="card-text">{{ Str::limit($room->description, 100) }}</p>
                    <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-primary">عرض التفاصيل</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
