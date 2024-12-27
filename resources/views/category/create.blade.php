@extends('Admins.indexAdmin')
@section('content')
    <form action="{{ secure_url(route('category.store')) }}" class="container" method="post">
        @csrf
        <br><br><br><br><br><br><br>
        <div class="form-group">
            <label for="exampleFormControlInput1">nom de categorie</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='name' placeholder="name">
        </div>
        <button type="submit" value="envoyer">envoyer</button>
    </form>
@endsection
