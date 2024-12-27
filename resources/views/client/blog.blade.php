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
                <a href="{{ route('clientIndex.index') }}" class="txt27">
                    Home
                </a>

                <span class="txt29 m-l-10 m-r-10">/</span>

                <span class="txt29">
                    Blog
                </span>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
                        <!-- Block4 -->
                        @foreach ($blogs as $blog)
                            <div class="blo4 p-b-63">
                                <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
                                    <a href={{ route('clientBlog_detail.show', $blog->id) }}>
                                        <img src={{ $blog->image }} alt="IMG-BLOG">
                                    </a>
                                </div>

                                <div class="text-blo4 p-t-33">
                                    <h4 class="p-b-16">
                                        <a href={{ route('clientBlog_detail.show', $blog->id) }}
                                            class="tit9">{{ $blog->titre }}</a>
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
                                            Comments
                                        </span>
                                    </div>

                                    <p>
                                        {{ $blog->description }}
                                    </p>

                                </div>
                            </div>
                        @endforeach


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
                                        MONDAY
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
