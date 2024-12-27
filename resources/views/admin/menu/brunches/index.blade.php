{{-- resources/views/admin/menu/brunches/index.blade.php --}}
@extends('Admins.indexAdmin')

@section('content')
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
</style>

<div class="container">
    <br><br><br><br>
    <section class="mb-5"
    style="background-image: url(clientpage/images/bg-title-page-01.jpg); padding: 5em 0em;">
    <h2 class="tit6 t-center" style="    font-size: 3rem;
    text-align: center;
    text-shadow: 0px 0 20px black;">
Liste des Brunchs    </h2>
    </section>
    <a href="{{ route('admin.menu.create-brunch') }}" class="btn btn-primary">Ajouter un Brunch</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brunches as $brunch)
                <tr>
                    <td>{{ $brunch->nom }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($brunch->description, 50) }}</td>
                    <td>{{ $brunch->prix }} MAD</td>
              <td>      <img src="{{ secure_asset($brunch->image) }}" alt="Image" width="100"></td>
              <td class="action-buttons">
                <form action="{{ secure_url(route('brunch.destroy', $brunch->id)) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn delete">Supprimer</button>
                </form>
            </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
