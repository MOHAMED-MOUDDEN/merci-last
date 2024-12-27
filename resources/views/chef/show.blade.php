@extends('Admins.indexAdmin')
@section('content')
    <base href="/public">
    <div class="container">
        <br />
        <br />
        <br />
        <br />
        <br />
        <div class="card" style="width: 18rem; background-color:antiquewhite;color:black">
            <img src="{{ $chef->image }}" class="card-img-top" alt="{{ $chef->image }}" width="300" height="250">
            <div class="card-body">
                <h5 class="card-title" style="color
                :black">{{ $chef->nom }}</h5>
                <p class="card-text">{{ $chef->bio }}</p>

            </div>
        </div>
    </div>
    </div>
@endsection
