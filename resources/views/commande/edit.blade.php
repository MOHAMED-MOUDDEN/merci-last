@extends('Admins.indexAdmin')
@section('content')
    <form action="{{ route('comnd.update', $comnd->id) }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        @method('put');
        <br />
        <br />
        <br />
        <br />
        <br />

        <div class="form-group">
            <label for="exampleFormControlInput1">Nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $comnd->nom }}"
                name='nom' >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Prenom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='prenom'
                value="{{ $comnd->prenom }}" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">email</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='adresse'
                value="{{ $comnd->email }}" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Telephont</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='phone'
                value="{{ $comnd->phone }}" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Adresse</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='adresse'
                value="{{ $comnd->adresse }}" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Commande</label>
            <textarea name="commande" id="" cols="50" rows="10">{{ $comnd->commande }}</textarea>

        </div>

        <button type="submit" value="envoyer">update</button>
    </form>
@endsection
