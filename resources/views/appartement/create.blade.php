@extends('Admins.indexAdmin')
@section('content')
<div class="container">
    <br><br><br><br>

    <section class="mb-5"
    style="background-image: url(clientpage/images/bg-title-page-01.jpg); padding: 5em 0em;">
    <h2 class="tit6 t-center" style="    font-size: 3rem;
    text-align: center;
    text-shadow: 0px 0 20px black;">
Créer un Nouvel Appartement    </h2>
    </section>

    <form action="{{secure_url( route('appartements.store')) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Afficher les erreurs -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Champ Nom -->
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom') }}" required>
        @error('nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <!-- Champ Description -->
        <label for="description">Description :</label>
        <textarea id="description" name="description" class="form-control" required>{{ old('description') }}</textarea>
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <!-- Champ Image -->
        <label for="image">Image (optionnelle) :</label>
        <input type="file" id="image" name="image" class="form-control" accept="image/*">
        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <!-- Champ Prix -->
        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" class="form-control" step="0.01" value="{{ old('prix') }}" required>
        @error('prix')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <!-- Champ Étoiles -->
        <label for="etoiles">Étoiles (sur 5) :</label>
        <input type="number" id="etoiles" name="etoiles" class="form-control" min="1" max="5" value="{{ old('etoiles', 3) }}">
        @error('etoiles')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <!-- Champ Informations Supplémentaires -->
        <label for="extra_info">Informations Supplémentaires :</label>
        <input type="text" id="extra_info" name="extra_info" class="form-control" value="{{ old('extra_info') }}">
        @error('extra_info')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <!-- Bouton de Soumission -->
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>

</div>


@endsection
