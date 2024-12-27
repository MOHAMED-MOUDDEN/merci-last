@extends('Admins.indexAdmin')
@section('content')
    <div class="container">
        <br />
        <br />
        <br />
        <br />
        <br />

        <div class="card" style="width: 18rem; background-color:antiquewhite;color:black">
            <img src="{{ $repa->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title" style=" color:black">{{ $repa->nom }}</h4>
                <p class="card-text">{{ $repa->description }} </p>
                <h6>{{ $repa->type }} </h6>
                <a href="#" class="btn btn-light " style=" color:black">{{ $repa->prix }}$ </a>

            </div>
        </div>
    </div>
@endsection
