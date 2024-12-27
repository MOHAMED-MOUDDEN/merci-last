@extends('Admins.indexAdmin')
@section('content')

    <body>

        <section style="color:black">
            <br><br>
            <br><br>
            <br>

            <div class="row">
                <div class="col-md-6 ">
                    @if ($count > 0)
                        <h1 class="text-center font-weight-normal" style="color: white">{{ $count }} commantaires</h1>

                        @foreach ($comments as $comment)
                            <div class="darker mt-4 text-justify border border-dark rounded "
                                style="background-color: rgb(231, 225, 219)">
                                <img src="{{ $comment->image }}" class="rounded-circle" width="40" height="40">
                                <h4>{{ $comment->name }}</h4>
                                <span>{{ $comment->created_at }}</span>
                                <br>
                                <p>{{ $comment->commantaire }}
                            </div>
                        @endforeach
                    @else
                        <h1 class="font-weight-normal" style="color: bisque">aucun commentaire</h1>
                    @endif


                </div>
                <div class=" col-md-6">
                    <br><br><br><br>
                    <form action="{{ secure_url(route('comment.store')) }}" style="background-color: rgb(231, 225, 219)"
                        class="container border border-dark rounded" id="algin-form" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <h3 class="font-weight-normal">ajouter un commantaire</h3>
                            <label for="message" class="font-weight-light">Message</label>
                            <textarea name="commantaire" cols="30" rows="5" class="form-control border border-dark rounded"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name" class="font-weight-light">Name</label>
                            <input type="text" name="name" id="fullname"
                                class="form-control border border-dark rounded">
                        </div>
                        <div class="form-group">
                            <label for="email" class="font-weight-light">Email</label>
                            <input type="text" name="email" id="email"
                                class="form-control border border-dark rounded">
                        </div>
                        <div class="form-group">
                            <input name="id_blog" value="{{ $id }}" hidden />

                        </div>
                        <div class="form-group">
                            <input name="image" value="{{ $profile->image }}" hidden />
                        </div>

                        <div class="form-group">
                            <button type="submit" id="post" class="btn btn-primary">Post Comment</button>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </body>
@endsection
