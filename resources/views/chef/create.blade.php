@extends('Admins.indexAdmin')
@section('content')
    <form action="{{secure_url( route('chef.store')) }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        <br />
        <br />
        <br />
        <br />
        <br />

        <div class="form-group">
            <label for="exampleFormControlInput1">nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='nom' placeholder="name">
        </div>
        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlInput1" name='bio' placeholder="bio"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">ajouter une image</label><br>
            <input type="file"  name="image" />
        </div>
        <button class="envoyer" type="submit" value="envoyer">envoyer</button>
    </form>
@endsection
