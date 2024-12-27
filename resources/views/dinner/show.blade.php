@extends('layout')
@section('content')
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{ $dinner->image }}" class="card-img-top" alt="{{ $dinner->image }}" width="100" height="100">
            <div class="card-body">
                <h5 class="card-title">{{ $dinner->nom }}</h5>
                <p class="card-text">{{ $dinner->description }}</p>
                <p href="" class="btn btn-primary">{{ $dinner->prix }} $ </p>
            </div>
        </div>
    </div>
    </div>
@endsection
