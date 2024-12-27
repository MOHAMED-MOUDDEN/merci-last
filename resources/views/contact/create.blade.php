@extends('Admins.indexAdmin')

@section('content')
    <form action="{{ secure_url(route('contact.store')) }}" class="container" method="post">
        @csrf
        <br />
        <br />
        <br />
        <br />
        <div class="form-group">
            <label for="exampleFormControlInput1">nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='name' placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">email</label>
            <input type="mail" class="form-control" id="exampleFormControlInput1" name='email' placeholder="email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">phone</label>
            <input type="tel" class="form-control" id="exampleFormControlInput1" name='phone' placeholder="phone">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
        </div>
        <button type="submit" value="envoyer">envoyer</button>
    </form>
@endsection
