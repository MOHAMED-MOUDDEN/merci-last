@extends('layout')
@section('content')
    <form action="{{ secure_url(route('dinner.store')) }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='nom' placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">description</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='description'
                placeholder="description">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">prix</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='prix' placeholder="prix">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">ajouter un image</label>
            <input type="file" class="form-control" name="image" />
        </div>
        <button type="submit" value="envoyer">envoyer</button>
    </form>
@endsection
