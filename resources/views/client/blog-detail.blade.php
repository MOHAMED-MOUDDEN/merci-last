@extends('client.layout')
@section('content')
    <base href="/public">
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-title-page-03.jpg);">
        <h2 class="tit6 t-center">
            Blog
        </h2>
    </section>


    <!-- Content page -->
    <section>
        <div class="bread-crumb bo5-b p-t-17 p-b-17">
            <div class="container">
                <a href={{ route('clientIndex.index') }} class="txt27">
                    Home
                </a>

                <span class="txt29 m-l-10 m-r-10">/</span>

                <a href={{ route('clientBlog.index') }} class="txt27">
                    Blog
                </a>

                <span class="txt29 m-l-10 m-r-10">/</span>

                <span class="txt29">
                    {{ $blog->titre }}
                </span>
            </div>
        </div>

        <div class="container">
            <div class="row ">
                <div class="col-md-8 col-lg-9">
                    <div class="p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
                        <!-- Block4 -->
                        <div class="blo4 p-b-63">
                            <!-- - -->
                            <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
                                <a href="">
                                    <img src="{{ $blog->image }}" alt="IMG-BLOG" width="200px" height="300px">
                                </a>

                                <div class="date-blo4 flex-col-c-m">
                                    <span class="txt30 m-b-4">

                                    </span>

                                    <span class="txt31">
                                        {{ $blog->created_at }}
                                    </span>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="text-blo4 p-t-33">
                                <h4 class="p-b-16">
                                    <a href={{ route('clientBlog_detail.index') }} class="tit9">{{ $blog->titre }}
                                    </a>
                                </h4>

                                <div class="txt32 flex-w p-b-24">
                                    <span>
                                        {{ $blog->user->name }}
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>

                                    <span>
                                        {{ $blog->created_at }}
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>

                                    <span>
                                        {{ $blog->category->name }}
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>

                                    <span>
                                        <a href="{{ route('clientComment.show', $blog->id) }}"> {{ $count }}
                                            commentaires</a>
                                    </span>
                                </div>

                                <p>
                                    {{ $blog->description }} </p>
                            </div>
                        </div>

                        <!-- Leave a comment -->
                        <form action="{{ secure_url(route('clientComment.store')) }}" class="wrap-form-booking" method="post">
                            @csrf
                            <h4 class="txt33 p-b-14">
                                ajouter un commantaire
                            </h4>

                            <p>
                                Your email address will not be published. Required fields are marked *
                            </p>

                            <textarea class="bo-rad-10 size29 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-40" name="commantaire" placeholder="Comment..."></textarea>

                            <div class="size30 bo2 bo-rad-10 m-t-3 m-b-20">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name"
                                    placeholder="Name">
                            </div>

                            <div class="size30 bo2 bo-rad-10 m-t-3 m-b-20">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email"
                                    placeholder="Email">
                            </div>
                            <div>
                                <input type="text" name="id_blog" placeholder="blog" value="{{ $blog->id }}" hidden>
                            </div>
                            <div>
                                <input type="text" name="image" placeholder="blog" value="{{ $profile->image }}"
                                    hidden>
                            </div>
                            <!-- Button3 -->
                            <button type="submit" class="btn3 flex-c-m size31 txt11 trans-0-4">
                                Post Comment
                            </button>
                        </form>

                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
                        <!-- Search -->
                        <form class="d-flex" action="{{ secure_url(route('search')) }}" method="get" role="search">
                            <select class="form-control me-2" type="search" name="search" placeholder="Search"
                                aria-label="Search">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>

                        <!-- Categories -->
                        <div class="categories">
                            <h4 class="txt33 bo5-b p-b-35 p-t-58">
                                Categories
                            </h4>
                            @foreach ($categories as $category)
                                <ul>
                                    <li class="bo5-b p-t-8 p-b-8">
                                        {{ $category->name }}
                                    </li>

                                </ul>
                            @endforeach
                        </div>
                        <!-- Archive -->
                        <div class="archive">
                            <h4 class="txt33 p-b-20 p-t-43">
                                Horaire du Restauant
                            </h4>

                            <ul>
                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        LUNDI
                                    </a>

                                    <span class="txt29">
                                        10:00-22:00
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        MARDI
                                    </a>

                                    <span class="txt29">
                                        10:00-22:00
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        MERCREDI
                                    </a>

                                    <span class="txt29">
                                        10:00-22:00
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        JEUDI
                                    </a>

                                    <span class="txt29">
                                        10:00-22:00
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        VENDREDI
                                    </a>

                                    <span class="txt29">
                                        (FERME)
                                    </span>
                                </li>


                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        SAMEDI
                                    </a>

                                    <span class="txt29">
                                        10:00-02:00
                                    </span>
                                </li>

                                <li class="flex-sb-m p-t-8 p-b-8">
                                    <a href="#" class="txt27">
                                        dimanche
                                    </a>

                                    <span class="txt29">
                                        10:00-02:00
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
