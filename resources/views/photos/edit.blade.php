@extends('Admins.indexAdmin')
@section('content')
    <form action="{{ secure_url(route('photos.update', $photo->id) )}}" class="container" method="post">
        @csrf
        @method('put')
        <br><br><br><br><br><br>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">image</label><br>
            <input value="{{ $photo->photo }}" type="file"  id="exampleFormControlTextarea1"
                name="image" />

        </div>
        <div class="form-group">
            {{-- <label for="exampleFormControlInput1">type</label> --}}
            <input type="text" class="form-control" id="exampleFormControlInput1" value="general"
                name='type' placeholder="type"  hidden>
        </div>
        <button class="envoyer" type="submit" value="envoyer">update</button>
    </form>
@endsection
