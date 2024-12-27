@extends('Admins.indexAdmin')

@section('content')


<style>
    td .btn {
        width: 200px;
    }
    .td-btn {
        /* position: absolute; */
        align-items: center;

    }
    @media screen and (max-width: 992px){
        td {
            position: relative !important;

        }
        td .btn {
        width: 100%;
    }
    .td-btn {
        /* position: absolute; */
        align-items: stretch;
    }
    }
</style>



    <div class="container">
        <br><br><br><br>
        <section class="mb-5"
            style="background-image: url(clientpage/images/bg-title-page-01.jpg); padding: 5em 0em;">
            <h2 class="tit6 t-center" style="    font-size: 3rem;
            text-align: center;
            text-shadow: 0px 0 20px black;">
                Reviews
            </h2>
        </section>
        <div class="">
            {{-- <p style="color: black">créer un nouveau image:</p> --}}
            <a class="btn btn-primary btn-lg p-3" href="{{ route('reviews.create') }}" role="button">ajouter review</a>
        </div>
        <table class="table" >
            <thead>
                <tr>
                    <th scope="col">photos</th>
                    <th scope="col">Nom complet</th>
                    <th scope="col">évaluation</th>
                    <th scope="col">commentaire</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $item)
                    <tr>
                        <td data-label="Nom complet" style="border-top: 0px; ">
                            @if (is_null($item->image))

                                <img src="clientpage/images/profile.webp" alt="{{ $item->image }}" class="img-tumbnail"
                            style=" width:100px;
                            height:100px;!important"></td>


                            @else

                            <img src="{{ $item->image }}" alt="{{ $item->image }}" class="img-tumbnail"
                            style=" width:100px;
                            height:100px;!important"></td>

                            @endif
                        </td>
                        <td data-label="Nom complet" style="border-top: 0px; ">
                            {{ $item->nom }}
                        </td>

                        <td data-label="évaluation" style="border-top: 0px; ">{{ $item->rate }}</td>

                        <td data-label="commentaire" style="border-top: 0px; white-space: wrap;"><br>
                            {{ $item->comment }}
                        </td>

                        <td style="border-top: 0px;"><a class="btn btn-success" href="{{ route('reviews.edit', $item->id) }}">edit</a>



                            <form action="{{ secure_url(route('reviews.destroy', $item->id)) }}" method="post">
                                <button type="submit" class="btn btn-danger">delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
