@extends('Admins.indexAdmin')

@section('content')
    <style>
        <style>
    table th, table td {
        white-space: nowrap; /* يمنع النص من الالتفاف */
    }
    table th:nth-child(2), table td:nth-child(2) {
        max-width: 300px; /* عرض محدد للشرح */
        overflow: hidden;
        text-overflow: ellipsis; /* إضافة "..." إذا تجاوز النص العرض */
    }
    table th:nth-child(1), table td:nth-child(1) {
        max-width: 200px; /* عرض محدد للشرح */
        overflow: hidden;
        text-overflow: ellipsis; /* إضافة "..." إذا تجاوز النص العرض */
    }
    table th:nth-child(3), table td:nth-child(3) {
        max-width: 200px; /* عرض محدد للشرح */
        overflow: hidden;
        text-overflow: ellipsis; /* إضافة "..." إذا تجاوز النص العرض */
    }
    table th:nth-child(4), table td:nth-child(4) {
        max-width: 200px; /* عرض محدد للشرح */
        overflow: hidden;
        text-overflow: ellipsis; /* إضافة "..." إذا تجاوز النص العرض */
    }
</style>
<div class="container">
    <br><br><br><br>

    <section class="mb-5"
    style="background-image: url(clientpage/images/bg-title-page-01.jpg); padding: 5em 0em;">
    <h2 class="tit6 t-center" style="    font-size: 3rem;
    text-align: center;
    text-shadow: 0px 0 20px black;">
appartements     </h2>
    </section>
    @if($rooms->isEmpty())
        <p>Aucun appartement enregistré.</p>
    @else
    <button class="btn btn-primary btn-sm" ><a href="/appartements/create"class="btn btn-primary">Ajouter un appartement</a></button>
        <table class="table">

            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Étoiles</th>
                    <th>Image</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                    <tr>
                        <td>{{ $room->nom }}</td>
                        <td>{{ $room->description }}</td>
                        <td>{{ $room->prix }} dirhams</td>
                        <td>
                            @for($i = 0; $i < $room->etoiles; $i++)
                                ⭐
                            @endfor
                        </td>
                        <td><img src="{{ $room->image }}" alt="img"> </td>

                        <td>
                            <!-- Liens pour les actions comme modifier et supprimer -->
                            <a href="{{ route('appartement.edit', $room->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <!-- داخل الفيو admin.blade.php -->
                            <form action="{{ secure_url(route('appartement.destroy', $room->id)) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet appartement?')">Supprimer</button>
                            </form>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

@endsection
