@extends('Admins.indexAdmin')

@section('content')

<style>
    td .btn {
        width: 100px;
    }
    .td-btn {
        position: absolute;
    }
    @media screen and (max-width: 992px){
        td {
            position: relative !important;

        }
        td .btn {
        width: 100%;
    }
    }
</style>


    <div class="container">
        <br />
        <br />
        <br />
        <br />
        <section class="mb-5"
            style="background-image: url(clientpage/images/bg-title-page-01.jpg); padding: 5em 0em;">
            <h2 class="tit6 t-center" style="    font-size: 3rem;
            text-align: center;
            text-shadow: 0px 0 20px black;">
                MENU
            </h2>
        </section>
        <div  >
            <a class="btn btn-primary btn-lg p-3" href="{{ route('repas.create') }}" role="button">ajouter un repas</a>
        </div>
        <div class="form-group select-dropdown" style="margin-bottom: 16px">


            <form action="{{ secure_url(route('repa.type')) }}">
                <select name="type" id="type">

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
                <div>
                    <button class="btn btn-primary btn-lg p-3">
                        Choisir
                    </button>
                </div>
            </form>


        <table class="table" >
            <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">nom</th>
                    <th scope="col">prix</th>
                    <th scope="col">type</th>
                    <th scope="col" style="width: 330px">description</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($repas as $item)


                    <tr>
                        <td style="display: flex;justify-content: center; border-top: 0px;"><img style="border-radius: 0%; max-width:100px; max-height:100px; width: auto; height: auto;" src="{{ $item->image }}" alt="{{ $item->image }}" class="img-tumbnail"
                            style="width:100px;height:100px; !important"></td>
                        <td data-label="nom" style="white-space: wrap; border-top: 0px;">{{ $item->nom }}</td>
                        <td data-label="prix" style="border-top: 0px;">{{ $item->prix }}</td>
                        <td data-label="type" style="border-top: 0px;">{{ $item->type }}</td>
                        <td data-label="description" style="white-space: wrap; border-top: 0px;"><br>{{ $item->description }}</td>

                        {{-- <td style="display: flex;flex-direction: column; border-top: 0px;" class="td-btn"><a class="btn btn-success" href="{{ route('repas.edit', $item->id) }}">edit</a> --}}
                        <td style="display: flex;flex-direction: column; border-top: 0px;padding: 0;" class="td-btn">

                            {{-- <a class="btn btn-success" href="{{ route('repas.edit', $item->id) }}">edit</a> --}}
                            <form action="{{secure_url( route('repas.edit', $item->id)) }}" >
                                <button type="submit" class="btn btn-success">edit</button>
                                @csrf
                                @method('PATCH')
                            </form>

                            <a class="btn btn-primary" href="{{ route('repas.show', $item->id) }}">show</a>

                            <form action="{{ secure_url(route('repas.destroy', $item->id)) }}" method="post">
                                <button type="submit" class="btn btn-danger">delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $repas->links() }}
        @if ($msg = Session::get('succes'))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

    </div>
@endsection
