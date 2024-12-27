@extends('client.layout')
@section('content')
    <base href="/public">
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-event-03.jpg);">
        <h2 class="tit6 t-center">
            Comment
        </h2>
    </section>


    <section style=" .link-muted { color: #aaa; } .link-muted:hover { color: #1266f1; }">
        <div class="container my-5 py-5 text-dark">
            <h4 class="mb-0">Recent comments</h4>
            <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>


            <div class="row d-flex justify-content-center">
                <div class="col-md-11 col-lg-9 col-xl-7">
                    @foreach ($comments as $comment)
                        <div class="d-flex flex-start">
                            <img class="rounded-circle shadow-1-strong me-3" src="{{ $comment->image }}" alt="avatar"
                                width="65" height="65" />
                            <div class="card w-100" style="border:1px solid black">
                                <div class="card-body p-4">
                                    <div class="">
                                        <h5> {{ $comment->name }}</h5>
                                        <p class="small" style="color:rgb(204, 99, 99)">{{ $comment->created_at }} </p>
                                        <p>
                                            {{ $comment->commantaire }} </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <br />
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
