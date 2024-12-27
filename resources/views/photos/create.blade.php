@extends('Admins.indexAdmin')
@section('content')
    <form action="{{secure_url( route('photos.store')) }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        <br><br><br><br>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">ajouter un image</label>
            <input type="file"  name="photo" />
        </div>
        <div class="form-group">
            {{-- <label for="exampleFormControlInput1">type</label><br> --}}
            <input type="text" class="form-control" id="exampleFormControlInput1" name='type' placeholder="type" hidden value="general">
        </div>
        <button class="envoyer" type="submit" value="envoyer">envoyer</button>
    </form>
@endsection
