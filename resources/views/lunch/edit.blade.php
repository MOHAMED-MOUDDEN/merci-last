@extends('layout')
@section('content')
    <form action="{{ secure_url(route('lunch.update', $lunch->id)) }}" class="container" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $lunch->nom }}" name='nom'
                placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">description</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='description'
                value="{{ $lunch->description }}" placeholder="description">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">prix</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='prix'
                value="{{ $lunch->prix }}" placeholder="prix">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">[image]</label>
            <input value="{{ $lunch->image }}" type="file" class="form-control" id="exampleFormControlTextarea1"
                name="image" />

        </div>
        <button type="submit" value="envoyer">update</button>
    </form>
@endsection
