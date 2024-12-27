<!-- resources/views/admin/menu/create-supplement.blade.php -->
@extends('Admins.indexAdmin')
@section('content')

<br><br><br><br>


<section class="mb-5"
style="background-image: url(clientpage/images/bg-title-page-01.jpg); padding: 5em 0em;">
<h2 class="tit6 t-center" style="    font-size: 3rem;
text-align: center;
text-shadow: 0px 0 20px black;">
create supplement    </h2>
</section>
    <form action="{{secure_url( route('admin.menu.store-supplement')) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" required></textarea>
        </div>

        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" name="prix" class="form-control" id="prix" required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Supplement</button>
    </form>
@endsection
