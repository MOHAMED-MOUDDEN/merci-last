@extends('layout')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <p>créer un nouveau repas:</p>
            <a class="btn btn-primary btn-lg" href="{{ route('lunch.create') }}" role="button">create</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">nom</th>
                    <th scope="col">description</th>
                    <th scope="col">prix</th>
                    <th scope="col">image</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($lunchs as $item)
                    <tr>
                        <td>{{ $item->nom }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->prix }}</td>
                        <td><img src="{{ $item->image }}" alt="{{ $item->image }}" class="img-tumbnail" width="100"
                                height="100"></td>

                        <td><a class="btn btn-success" href="{{ route('lunch.edit', $item->id) }}">edit</a>
                        </td>
                        <td> <a class="btn btn-primary" href="{{ route('lunch.show', $item->id) }}">show</a></td>
                        <td>
                            <form action="{{ secure_url(route('lunch.destroy', $item->id) )}}" method="post">
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
