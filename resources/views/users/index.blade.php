@extends('Admins.indexAdmin')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <br />
            <h1 style="color:black">add a new client:</h1>
            <a class="btn btn-primary btn-lg" href="{{ route('user.create') }}" role="button">create</a>

        </div>
        <div class="row py-2 container">
            <div class="col-md-6">
                <h2>liste des clients</h2>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_filter">Filter by date:</label>
                    <form action="user" method="get">
                        <div class="input-group">
                            <select class="form-select" name="date_filter">
                                <option value="">tous les dates</option>
                                <option value="today">aujourd'hui</option>
                                <option value="hier">hier</option>
                                <option value="ce_semaine">ce semaine</option>
                                <option value="semaine_dernier">la semaine dernier</option>
                                <option value="ce_mois">ce mois</option>
                                <option value="mois_dernier">le mois dernier</option>
                                <option value="cette_annee">cette année</option>
                                <option value="annee_dernier">l'annee dernier</option>
                            </select>
                            <button type="submit" class="btn btn-primary">filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <table class="table table-bordered table-hover container">
            <thead>
                <tr>
                    <th scope="col">nom</th>
                    <th scope="col">email</th>
                    <th scope="col">date creation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>

                        <td>{{ $item->created_at }} </td>
                        <td><a class="btn btn-success" href="{{ route('user.edit', $item->id) }}"><i
                                    class="fa-solid fa-pen-to-square"></i></a>&nbsp;
                        </td>
                        <td> <a class="btn btn-primary" href="{{ route('user.show', $item->id) }}"><i
                                    class="fa-solid fa-eye fa-1x"></i></a>&nbsp;</td>
                        <td>
                            <form action="{{ secure_url(route('user.destroy', $item->id)) }}" method="post">
                                <button type="submit" class="btn btn-danger">delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                        <td> <a class="btn btn-warning" href="{{ route('profile', $item->id) }}" role="button">profile
                            </a>
                        </td>
                        <td> <a class="btn btn-success" href="{{ route('reservations', $item->id) }}" role="button">
                                reservations</a>
                        </td>
                        <td> <a class="btn btn-success" href="{{ route('contacts', $item->id) }}" role="button">
                                msg</a>
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
