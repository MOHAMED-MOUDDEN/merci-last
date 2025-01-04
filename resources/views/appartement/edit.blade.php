@extends('layout')

@section('content')
    <h1>Modifier l'Appartement</h1>

    <form action="{{ {{secure_url(route('appartements.update', $appartement->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="{{ $appartement->nom }}" required>

        <label for="description">Description :</label>
        <textarea id="description" name="description" required>{{ $appartement->description }}</textarea>

        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" value="{{ $appartement->prix }}" required>

        <button type="submit" class="btn">Mettre à jour</button>
    </form>

    <style>
        /* admin.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #333;
    font-size: 28px;
    margin-bottom: 20px;
}

form {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: 2px solid #333; /* Contour noir */
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
    color: #333;
}

input[type="text"],
input[type="number"],
textarea {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #ddd;
    margin-bottom: 20px;
    font-size: 16px;
}

input[type="text"]:focus,
input[type="number"]:focus,
textarea:focus {
    border-color: #ff0000; /* Bordure rouge en focus */
    outline: none;
}

textarea {
    height: 100px;
    resize: vertical;
}

.btn {
    display: block;
    width: 100%;
    padding: 12px;
    font-size: 16px;
    font-weight: bold;
    background-color: #ff0000; /* Rouge pour le bouton */
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #cc0000; /* Rouge foncé au survol */
}

    </style>
@endsection
