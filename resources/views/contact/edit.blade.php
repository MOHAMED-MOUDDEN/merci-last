@extends('Admins.indexAdmin')

@section('content')
    <form action="{{secure_url( route('contact.update', $contact->id) )}}" class="container" method="post">
        @csrf
        @method('put')
        <br><br><br><br><br>
        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $contact->name }}" name='name'
                placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">email</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='email'
                value="{{ $contact->email }}" placeholder="email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">phone</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='phone'
                value="{{ $contact->phone }}" placeholder="phone">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">[message]</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message">{{ $contact->message }}</textarea>
        </div>
        <button type="submit" value="envoyer">update</button>
    </form>
@endsection
