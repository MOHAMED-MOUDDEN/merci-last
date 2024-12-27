@extends('Admins.indexAdmin')
@section('content')
    <div class="container">
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $category->name }}</label>
        </div>
    </div>
@endsection
