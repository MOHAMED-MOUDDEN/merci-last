@extends('Admins.indexAdmin')
@section('content')
    <div class="container">
        <br><br><br><br><br><br>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1">date :{{ $reservation->date }}</label>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">heure : {{ $reservation->heure }}</label>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">gens : {{ $reservation->gens }}</label>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">nom : {{ $reservation->nom }}</label>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">phone :{{ $reservation->phone }}</label>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">email :{{ $reservation->email }}</label>

                </div>
            </div>
        </div>
    </div>
@endsection
