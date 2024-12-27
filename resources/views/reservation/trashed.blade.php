@extends('Admins.indexAdmin')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>trashed reservations</h1>
            <a class="btn btn-primary btn-lg" href="{{ route('reservation') }}" role="button">All reservations</a>


        </div>
        @if ($reservations->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">date</th>
                        <th scope="col">time</th>
                        <th scope="col">people</th>
                        <th scope="col">name</th>
                        <th scope="col">phone</th>
                        <th scope="col">email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $item)
                        <tr>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->heure }}</td>
                            <td>{{ $item->gens }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email }}</td>

                            <td><a class="btn btn-success" href="{{ route('reservation.edit', $item->id) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>&nbsp;
                            </td>
                            <td> <a class="btn btn-primary" href="{{ route('reservation.show', $item->id) }}"><i
                                        class="fa-solid fa-eye fa-1x"></i></a>&nbsp;</td>
                            <td>
                                <form action="{{secure_url( route('reservation.destroy', $item->id)) }}" method="post">
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
@else
    <div class="alert alert-danger">no reservations</div>
    @endif

@endsection
