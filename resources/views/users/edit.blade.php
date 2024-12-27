@extends('Admins.indexAdmin')

@section('content')
    <form action="{{ secure_url(route('user.update', $user->id)) }}" class="container" method="post">
        @csrf
        @method('put');
        <br />
        <br />
        <br />
        <br />

        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $user->name }}" name='name'
                placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">email</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='email'
                value="{{ $user->email }}" placeholder="email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">password</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='password'
                value="{{ $user->password }}" placeholder="password">
        </div>

        <button type="submit" value="envoyer">update</button>
    </form>
@endsection
