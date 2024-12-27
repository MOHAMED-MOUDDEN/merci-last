@extends('Admins.indexAdmin')

@section('content')


<style>
    td .btn {
        width: 250px;
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
                Galery
            </h2>
        </section>
        <div class="">
            {{-- <p style="color: black">créer un nouveau image:</p> --}}
            <a class="btn btn-primary btn-lg p-3" href="{{ route('photos.create') }}" role="button">ajouter image</a>
        </div>
        <table class="table" >
            <thead>
                <tr>
                    <th scope="col">image</th>
                    {{-- <th scope="col">type</th> --}}
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photos as $item)
                    <tr>
                        <td style="display: flex;justify-content: center; border-top: 0px;"><img style="border-radius: 0%; max-width:100px; max-height:100px; width: auto; height: auto;" src="{{ $item->photo }}" alt="{{ $item->photo }}"
                                style="width:100px; height:100px; !important" class="img-tumbnail"></td>
                        {{-- <td style="border-top: 0px; ">{{ $item->type }}</td> --}}
                        <td style="border-top: 0px;"><a class="btn btn-success" href="{{ route('photos.edit', $item->id) }}">edit</a>



                            <form action="{{ secure_url(route('photos.destroy', $item->id)) }}" method="post">
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
