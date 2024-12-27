@extends('layout')

@section('content')
    <h1>Liste des Appartements</h1>
    <a href="{{ route('appartements.create') }}" class="btn">Ajouter un Appartement</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appartements as $appartement)
            <tr>
                <td>{{ $appartement->id }}</td>
                <td>{{ $appartement->nom }}</td>
                <td>{{ $appartement->description }}</td>
                <td>{{ $appartement->prix }} € / nuit</td>
                <td class="action-buttons">
                    <form action="{{secure_url(rout('appartements.destroy', $appartement->id)) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn delete">Supprimer</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <style>
        /* public/css/admin.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    color: #333;
}

h1 {
    color: red;
    text-align: center;
    margin-bottom: 20px;
}

table {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;
    background-color: white;
}

table th, table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.btn {
    background-color: black;
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    border-radius: 5px;
    display: inline-block;
}

.btn:hover {
    background-color: red;
}

.action-buttons a {
    color: white;
    margin: 0 5px;
}

.action-buttons .edit {
    background-color: #007bff;
}

.action-buttons .delete {
    background-color: #dc3545;
}

    </style>
@endsection
