@extends('Admins.indexAdmin')

@section('content')
    <form action="{{ secure_url(route('user.store')) }}" class="container" method="post">
        @csrf
        <br />
        <br />
        <br />
        <br />
        <br />
        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='name' placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">email</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='email' placeholder="email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">password</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='password' placeholder="password">
        </div>

        <button type="submit" value="envoyer">envoyer</button>
    </form>
@endsection
