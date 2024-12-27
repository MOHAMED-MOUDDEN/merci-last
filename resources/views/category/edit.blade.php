@extends('Admins.indexAdmin')
@section('content')
    <form action="{{ secure_url(route('category.update', $category->id) )}}" class="container" method="post">
        @csrf
        @method('put')
        <br><br><br><br><br>
        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $category->name }}" name='name'
                placeholder="name">
        </div>
        <button type="submit" value="envoyer">update</button>
    </form>
@endsection
