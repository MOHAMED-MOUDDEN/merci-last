@extends('Admins.indexAdmin')

@section('content')
    <div class="container">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <div style="border:2px solid rgb(145, 118, 118);padding:20px">
            <div class="form-group">
                <label for="" style="font-size: 1em;color:rgb(203, 183, 155)">Nom:</label>
                <label for="exampleFormControlInput1">{{ $contact->name }}</label>
            </div>
            <div class="form-group">
                <label for="" style="font-size: 1em;color:rgb(203, 183, 155)">Email:</label>
                <label for="exampleFormControlInput1">{{ $contact->email }}</label>
            </div>
            <div class="form-group">
                <label for=""style="font-size: 1em;color:rgb(203, 183, 155)">Phone:</label>
                <label for="exampleFormControlInput1">{{ $contact->phone }}</label>
            </div>
            <div class="form-group">
                <label for="" style="font-size: 1em;color:rgb(203, 183, 155)">Message:</label>
                <label for="exampleFormControlTextarea1">{{ $contact->message }}</label>
            </div>
        </div>

    </div>
@endsection
