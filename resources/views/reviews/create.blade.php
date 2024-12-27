@extends('Admins.indexAdmin')
@section('content')
    <form action="{{secure_url( route('reviews.store') )}}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        <br />
        <br />
        <br />
        <br />
        <br />



        <div class="form-group">
            <label for="exampleFormControlInput1">Nom complet</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='nom' placeholder="Nom complet">
        </div>
        <label for="exampleFormControlInput1">Evaluation</label>
        <div class="form-group select-dropdown" style="margin-bottom: 16px">

            <select name="rate" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3"> 3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Commentaire</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">ajouter une image</label><br>
            <input type="file"  name="image" />
        </div>

        <button class="envoyer" type="submit" value="envoyer">envoyer</button>
        </form>
        @if ($msg = Session::get('succes'))
        <div class="alert alert-success">
            {{ $msg }}
        </div>
    @endif
@endsection
