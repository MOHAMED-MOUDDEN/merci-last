@extends('Admins.indexAdmin')
@section('content')
    <form action="{{ secure_url(route('reviews.update', $review->id)) }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        @method('put');
        <br><br><br><br>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nom complet</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='nom'
                value="{{ $review->nom }}" placeholder="Nom complet">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Evaluation</label>

                <div class="form-group select-dropdown" style="margin-bottom: 16px">

                    <select name="rate" id="" >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Commentaire</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='comment'
                value="{{ $review->comment }}" placeholder="type">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1"></label><br>
            <input value="{{ $review->image }}" type="file"  id="exampleFormControlTextarea1"name="image" />

        </div>
        <button class="envoyer" type="submit" value="envoyer">envoyer</button>
    </form>
@endsection
