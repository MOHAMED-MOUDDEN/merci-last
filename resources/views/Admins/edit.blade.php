@extends('Admins.indexAdmin')

@section('content')
<div class="container">
    <br><br><br><br>

    <section class="mb-5"
    style="background-image: url(clientpage/images/bg-title-page-01.jpg); padding: 5em 0em;">
    <h2 class="tit6 t-center" style="    font-size: 3rem;
    text-align: center;
    text-shadow: 0px 0 20px black;">
Edit Appartement     </h2>
    </section>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ secure_url(route('appartement.update', $room->id) )}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $room->nom) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $room->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" value="{{ old('prix', $room->prix) }}" required>
        </div>

        <div class="mb-3">
            <label for="etoiles" class="form-label">Étoiles</label>
            <input type="number" class="form-control" id="etoiles" name="etoiles" value="{{ old('etoiles', $room->etoiles) }}" min="1" max="5" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image (URL)</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $room->image) }}">
        </div>

        <div class="mb-3">
            <label for="extra_info" class="form-label">Extra Information</label>
            <textarea class="form-control" id="extra_info" name="extra_info" rows="3">{{ old('extra_info', $room->extra_info) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('appartement.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
