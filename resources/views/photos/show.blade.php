@extends('Admins.indexAdmin')
@section('content')
    <br><br><br><br>
    <div class="container">
        <div class="form-group">
            <img src="{{ $photo->photo }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">type : {{ $photo->type }}</label>
        </div>


    </div>
@endsection
