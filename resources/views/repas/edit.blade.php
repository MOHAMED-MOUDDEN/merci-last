@extends('Admins.indexAdmin')
@section('content')

<style>
    .upload {
        border-radius: 4px;
        padding: 0 16px;
        height: 40px;
        cursor: pointer;
        background-color: white;
        border: 2px solid #d9d9d9;
        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
        margin-right: 16px;
        transition: background-color 200ms;
        color: black
    }

    /* file upload button hover state */
    .upload:hover {
    background-color: #f3f4f6;
    }

    /* file upload button active state */
    .upload:active {
        background-color: #e5e7eb;
    }
</style>
    <form action="{{ secure_url(route('repas.update', $repa->id)) }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <br />
        <br />
        <br />
        <br />
        <br />



        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $repa->nom }}" name='nom'
                placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">prix</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='prix'
                value="{{ $repa->prix }}" placeholder="prix">
        </div>

        <label for="exampleFormControlInput1">type</label>

        <div class="form-group select-dropdown">
                <select name="type" id=""  value="{{ $repa->type }}">

                    <optgroup label="Standard drinks">
                        <option id="Espresso" value="Espresso">Espresso</option>
                        <option id="Thé" value="Thé">Thé</option>
                        <option id="Frappuccino" value="Frappuccino">Frappuccino</option>
                        <option id="Cappuccino" value="Cappuccino">Cappuccino</option>
                        <option id="Café crème" value="Café crème">Café crème</option>
                        <option id="Ice tea" value="Ice tea">Ice tea</option>
                        <option id="Ice Coffée" value="Ice Coffée">Ice Coffée</option>
                        <option id="Fondue Au Chocolat" value="Fondue Au Chocolat">Fondue Au Chocolat </option>
                    </optgroup>

                    <optgroup label="Sucré">
                        <option id="Pancake" value="Pancake">Pancake</option>
                        <option id="Crêpe" value="Crêpe">Crêpe</option>
                        <option id="Gaufre" value="Gaufre">Gaufre</option>
                    </optgroup>
                    <optgroup label="Salé">
                        <option id="Crêpe salé" value="Crêpe salé">Crêpe sale</option>
                    </optgroup>
                    <optgroup label="Gold drinks">
                        <option id="Nos Jus" value="Nos Jus">Nos Jus</option>
                        <option id="Cocktail" value="Cocktail">Cocktail</option>
                        <option id="Nos Smoothies" value="Nos Smoothies">Nos Smoothies</option>
                        <option id="Milk shakes" value="Milk shakes">Milk shakes</option>
                        <option id="Mojito" value="Mojito">Mojito</option>
                        <option id="Detox" value="Detox">Detox</option>
                        <option id="Boissons Fraiches" value="Boissons Fraiches">Boissons Fraiches </option>
                    </optgroup>

                    <option id="Sandwich" style="font-weight: bold;" value="Sandwich">Club Sandwich</option>
                    <option id="Dessert" style="font-weight: bold;" value="Dessert">Dessert</option>
                    <option id="à la carte" style="font-weight: bold;" value="à la carte">à la carte</option>
                    <option id="Petits Déjeuners" style="font-weight: bold;" value="Petits Déjeuners">Petits Déjeuners</option>
                    <option id="Brunch" style="font-weight: bold;" value="Brunch">Brunch</option>
                    <option id="Supplements" style="font-weight: bold;" value="Supplements">Supplements</option>

                </select>
        </div>
        <script>
            var type = "<?php Print(Session::get('type')); ?>";
            document.getElementById(type).setAttribute('selected', true);
        </script>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $repa->description }}</textarea>
        </div>
        <div class="form-group">

            <label for="exampleFormControlTextarea1">image</label><br>
            {{-- <input src="{{ $repa->image }}" type="file"  id="exampleFormControlTextarea1"
                name="image" /> --}}
            {{-- <input type="file"  id="exampleFormControlTextarea1"name="image" value="{{ $repa->image }}"/> --}}

            <label for="fileupload" class="envoyer" style="color: black">Ajouter une image</label>
            <input type="file" name="image" id="fileupload" style="display:none;" value="{{ $repa->image }}"/>
            {{ $repa->image }}
        </div>
        <button class="envoyer" type="submit" value="envoyer">update</button>
    </form>
@endsection
