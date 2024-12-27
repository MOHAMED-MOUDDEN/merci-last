@extends('Admins.indexAdmin')
@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 style="color: black">create a reservation:</h1>
                    <hr />
                </div>
            </div>
        </div>
        <div class="row">
            @if (count($errors) > 0)
                @foreach ($errors->all() as $item)
                    {{ $item }}
                @endforeach
            @endif

            <div class="col">
                <form action="{{ secure_url(route('reservation.store')) }}" class="container" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">date</label>
                        <input type="date" class="form-control" name='date' placeholder="date">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">heure</label>
                        <input type="time" class="form-control" name='heure' placeholder="heure">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">gens</label>
                        <input type="number" class="form-control" name='gens' placeholder="gens">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="nom" />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">phone</label>
                        <input type="tel" class="form-control" name="phone" placeholder="phone" />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">email</label>
                        <input type="email" class="form-control" name="email" placeholder="email" />
                    </div>
                    <button type="submit" value="envoyer">envoyer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
