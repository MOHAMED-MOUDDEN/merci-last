@extends('Admins.indexAdmin')
@section('content')
    <form action="{{ secure_url(route('repas.store')) }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        <br />
        <br />
        <br />
        <br />
        <br />
<style>
        .form-control {
            /* background-color: white; */
            border-radius: 10px;
            /* border: 2px solid #d9d9d9; */

        }
        .form-control:focus {
        /* background-color: rgb(255, 255, 255); */
        /* border-color: #ec1d25; */
        border: 2px solid #ec1d25;
        color: #aaa;
    }


    option:checked, option:hover {
        background-color: #d9d9d9;
        }

    .select-dropdown,
    .select-dropdown * {
        margin: 0;
        padding: 0;
        position: relative;
        box-sizing: border-box;
    }
    .select-dropdown {
        position: relative;
        background-color: #2A3038;
        /* border: 2px solid #d9d9d9; */
        border-radius: 10px
    }
    .select-dropdown select {
        font-size: 1rem;
        font-weight: normal;
        width: 100%;
        padding: 8px 24px 8px 10px;
        border: none;
        background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
        appearance: none;
        color: #6C7293;

    }
    .select-dropdown select:active, .select-dropdown select:focus {
        outline: none;
        box-shadow: none;
    }
    .select-dropdown:after {
        content: "";
        position: absolute;
        top: 50%;
        right: 8px;
        width: 0;
        height: 0;
        margin-top: -2px;
        border-top: 5px solid #aaa;
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
    }
    input[type="file"]::file-selector-button {
        border-radius: 4px;
        padding: 0 16px;
        height: 40px;
        cursor: pointer;
        background-color: white;
        border: 2px solid #d9d9d9;
        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
        margin-right: 16px;
        transition: background-color 200ms;
    }

    /* file upload button hover state */
    input[type="file"]::file-selector-button:hover {
    background-color: #f3f4f6;
    }

    /* file upload button active state */
    input[type="file"]::file-selector-button:active {
        background-color: #e5e7eb;
    }

    label  {
        color: #ffffff;
        font-family: Montserrat;
        font-weight: 600;
        font-size: 15px;
    }
    .envoyer {
        border-radius: 4px;
        padding: 0 16px;
        height: 40px;
        cursor: pointer;
        background-color: white;
        border: 2px solid #d9d9d9;
        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
        margin-right: 16px;
        transition: background-color 200ms;
    }

    /* file upload button hover state */
    .envoyer:hover {
    background-color: #f3f4f6;
    }

    /* file upload button active state */
    .envoyer:active {
        background-color: #e5e7eb;
    }

    label  {
        color: #ffffff;
        font-family: Montserrat;
        font-weight: 600;
        font-size: 15px;
    }
    .ContinueSH:hover {
    color: #e5e7eb !important;
}
</style>
        <div class="form-group">
            <label for="exampleFormControlInput1">nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='nom' placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">prix</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='prix' placeholder="prix">
        </div>
        <label for="exampleFormControlInput1">type</label>
        <div class="form-group select-dropdown" style="margin-bottom: 16px">

            {{-- <select name="type" id="">
                <option value="lunch">lunch</option>
                <option value="dinner">dinner</option>
                <option value="breakfast"> breakfast</option>
                <option value="starters">starters</option>
                <option value="drink">drink</option>
                <option value="dessert">dessert</option>
                <option value="main">main</option>

            </select> --}}
            <select name="type" id="">

                <optgroup label="Standard drinks">
                    <option value="Espresso">Espresso</option>
                    <option value="Thé">Thé</option>
                    <option value="Frappuccino">Frappuccino</option>
                    <option value="Cappuccino">Cappuccino</option>
                    <option value="Café crème">Café crème</option>
                    <option value="Ice tea">Ice tea</option>
                    <option value="Ice Coffée">Ice Coffée</option>
                    <option value="Fondue Au Chocolat">Fondue Au Chocolat </option>
                </optgroup>
                {{-- <optgroup label="Boissons Fraiches">
                    <option value="Boissons Fraiches">Boissons Fraiches </option>
                </optgroup> --}}
                <optgroup label="Sucré">
                    <option value="Pancake">Pancake</option>
                    <option value="Crêpe">Crêpe</option>
                    <option value="Gaufre">Gaufre</option>
                </optgroup>
                <optgroup label="Salé">
                    <option value="Crêpe salé">Crêpe sale</option>
                </optgroup>
                <optgroup label="Gold drinks">
                    <option value="Nos Jus">Nos Jus</option>
                    <option value="Cocktail">Cocktail</option>
                    <option value="Nos Smoothies">Nos Smoothies</option>
                    <option value="Milk shakes">Milk shakes</option>
                    <option value="Mojito">Mojito</option>
                    <option value="Detox">Detox</option>
                    <option value="Boissons Fraiches">Boissons Fraiches </option>
                </optgroup>

                <option style="font-weight: bold;" value="Sandwich">Club Sandwich</option>
                <option style="font-weight: bold;" value="Dessert">Dessert</option>
                <option style="font-weight: bold;" value="à la carte">à la carte</option>
                <option style="font-weight: bold;" value="Petits Déjeuners">Petits Déjeuners</option>
                <option style="font-weight: bold;" value="Brunch">Brunch</option>
                <option style="font-weight: bold;" value="Supplements">Supplements</option>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">ajouter une image</label><br>
            <input type="file"  name="image" />
        </div>
        <div style="display: flex; justify-content: flex-start; align-items: center;">
            <button class="envoyer" type="submit" value="envoyer">envoyer</button>

        </div>
        @if ($msg = Session::get('succes'))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

    </form>

@endsection
