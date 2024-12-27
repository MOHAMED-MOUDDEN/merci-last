
@extends('Admins.indexAdmin')

@section('content')

<div class="container">
    <br><br><br><br>


    <section class="mb-5"
    style="background-image: url(clientpage/images/bg-title-page-01.jpg); padding: 5em 0em;">
    <h2 class="tit6 t-center" style="    font-size: 3rem;
    text-align: center;
    text-shadow: 0px 0 20px black;">
create brunch    </h2>
    </section>

    <form action="{{secure_url( route('admin.menu.store-brunch') )}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">description</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="prix">prix</label>
            <input type="number" name="prix" id="prix" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="image">image</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">submit</button>
    </form>
</div>
</div>


@endsection
