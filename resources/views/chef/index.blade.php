@extends('Admins.indexAdmin')
@section('content')

<style>
    td .btn {
        width: 200px;
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
            text-shadow: 0px 0 20px black;
            letter-spacing: 5px;">
                TEAM
            </h2>
        </section>
        <div class="">
            <a class="btn btn-primary btn-lg p-3" href="{{ route('chef.create') }}" role="button">ajouter un membre</a>
        </div>
        <table class="table" >
            <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">nom</th>
                    <th scope="col">bio</th>

                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($chefs as $item)
                    <tr>
                        <td style="display: flex;justify-content: center; border-top: 0px;"><img src="{{ $item->image }}" alt="{{ $item->image }}" class="img-tumbnail"
                            style=" width:100px;
                            height:100px;!important"></td>

                        <td data-label="Nom" style="border-top: 0px;">{{ $item->nom }}</td>
                        <td data-label="Bio" style="white-space: wrap; border-top: 0px;"><br>{{ $item->bio }}</td>


                        <td style="display: flex; flex-direction: column; border-top: 0px; " class="td-btn"><a class="btn btn-success" href="{{ route('chef.edit', $item->id) }}">edit</a>

                         <a class="btn btn-primary" href="{{ route('chef.show', $item->id) }}">show</a>

                            <form action="{{ secure_url(route('chef.destroy', $item->id) )}}" method="post">
                                <button type="submit" class="btn btn-danger">delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($msg = Session::get('succes'))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

    </div>
@endsection
