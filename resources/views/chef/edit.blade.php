@extends('Admins.indexAdmin')
@section('content')
    <form action="{{ route(secure_url('chef.update', $chef->id) )}}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <br />
        <br />
        <br />
        <br />
        <br />
        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $chef->nom }}" name='nom'
                placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">bio</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='bio'
                value="{{ $chef->bio }}" placeholder="description">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1"></label><br>
            <input value="{{ $chef->image }}" type="file"  id="exampleFormControlTextarea1"
                name="image" />

        </div>
        <button class="envoyer" type="submit" value="envoyer">update</button>
    </form>
@endsection
