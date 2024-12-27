@extends('Admins.indexAdmin')
@section('content')
    <form action="{{ secure_url(route('blog.update', $blog->id)) }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <br><br><br><br>
        <div class="form-group">
            <label for="exampleFormControlInput1">titre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='titre' placeholder="titre"
                value="{{ $blog->titre }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">category</label>
            <select name="category" id="category" value="{{ $blog->category }}">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }} </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">description</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='description'
                placeholder="description" value="{{ $blog->description }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">ajouter un image</label>
            <input type="file" class="form-control" name="image" value={{ $blog->image }} />
        </div>
        <button type="submit" value="envoyer">envoyer</button>
    </form>
@endsection
