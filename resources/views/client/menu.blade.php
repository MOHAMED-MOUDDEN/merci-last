@extends('client.layout')
@section('content')
    @include('client.includes.aside')
    <base href="/public">
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-title-page-01.jpg);">
        <h2 class="tit6 t-center">
            Pato Menu
        </h2>
    </section>


    <!-- Main menu -->
    <section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
                    <div class="wrap-item-mainmenu p-b-22">
                        <h3 class="tit-mainmenu tit10 p-b-25" style="color:brown">
                            STARTERS:
                        </h3>
                        @foreach ($starters as $item)
                            <!-- Item mainmenu -->
                            <div class="item-mainmenu m-b-36">
                                <div class="flex-w flex-b m-b-3">
                                    <a href="{{ route('cart.show', $item->id) }}" class="name-item-mainmenu txt21">
                                        {{-- {{ $item->nom }} --}}
                                        <button class="btn btn-danger flex-shrink-0 category" type="submit">
                                            <i class="bi-cart-fill me-1"></i>
                                            {{ $item->nom }}
                                        </button>
                                    </a>

                                    <div class="line-item-mainmenu bg3-pattern"></div>

                                    <div class="price-item-mainmenu txt22">
                                        {{ $item->prix }} MAD
                                    </div>
                                </div>

                                <span class="info-item-mainmenu txt23">
                                    {{ $item->description }}
                                </span>
                            </div>
                        @endforeach

                    </div>

                    <div class="wrap-item-mainmenu p-b-22">
                        <h3 class="tit-mainmenu tit10 p-b-25" style="color:brown">
                            Drinks
                        </h3>
                        @foreach ($drinks as $item)
                            <!-- Item mainmenu -->
                            <div class="item-mainmenu m-b-36">
                                <div class="flex-w flex-b m-b-3">
                                    <a href="{{ route('cart.show', $item->id) }}" class="name-item-mainmenu txt21">
                                        {{-- {{ $item->nom }} --}}
                                        <button class="btn btn-danger flex-shrink-0 category" type="submit">
                                            <i class="bi-cart-fill me-1"></i>
                                            {{ $item->nom }}
                                        </button>
                                    </a>

                                    <div class="line-item-mainmenu bg3-pattern"></div>

                                    <div class="price-item-mainmenu txt22">
                                        {{ $item->prix }} MAD
                                    </div>
                                </div>

                                <span class="info-item-mainmenu txt23">
                                    {{ $item->description }}
                                </span>
                            </div>
                        @endforeach
                    </div>


                </div>

                <div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
                    <div class="wrap-item-mainmenu p-b-22">
                        <h3 class="tit-mainmenu tit10 p-b-25" style="color:brown">
                            Main
                        </h3>
                        @foreach ($main as $item)
                            <!-- Item mainmenu -->
                            <div class="item-mainmenu m-b-36">
                                <div class="flex-w flex-b m-b-3">
                                    <a href="{{ route('cart.show', $item->id) }}" class="name-item-mainmenu txt21">

                                        {{-- {{ $item->nom }} --}}
                                        <button class="btn btn-danger flex-shrink-0 category" type="submit">
                                            <i class="bi-cart-fill me-1"></i>
                                            {{ $item->nom }}
                                        </button>
                                    </a>

                                    <div class="line-item-mainmenu bg3-pattern"></div>

                                    <div class="price-item-mainmenu txt22">
                                        {{ $item->prix }} MAD
                                    </div>
                                </div>

                                <span class="info-item-mainmenu txt23">
                                    {{ $item->description }}
                                </span>
                            </div>
                        @endforeach
                    </div>

                    <div class="wrap-item-mainmenu p-b-22">
                        <h3 class="tit-mainmenu tit10 p-b-25" style="color:brown">
                            Dessert
                        </h3>

                        @foreach ($desserts as $item)
                            <div class="item-mainmenu m-b-36">
                                <div class="flex-w flex-b m-b-3">
                                    <a href="{{ route('cart.show', $item->id) }}" class="name-item-mainmenu txt21">
                                        {{-- {{ $item->nom }} --}}
                                        <button class="btn btn-danger flex-shrink-0 category" type="submit">
                                            <i class="bi-cart-fill me-1"></i>
                                            {{ $item->nom }}
                                        </button>
                                    </a>

                                    <div class="line-item-mainmenu bg3-pattern"></div>

                                    <div class="price-item-mainmenu txt22">
                                        {{ $item->prix }} MAD
                                    </div>
                                </div>

                                <span class="info-item-mainmenu txt23">
                                    {{ $item->description }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Lunch -->
    <section class="section-lunch bgwhite">
        <div class="header-lunch parallax0 parallax100"
            style="background-image: url(clientpage/images/header-menu-01.jpg);">
            <div class="bg1-overlay t-center p-t-170 p-b-165">
                <h2 class="tit4 t-center">
                    Lunch
                </h2>
            </div>
        </div>

        <div class="container">
            <div class="row p-t-108 p-b-70">

                    @foreach ($lunches as $item)
                        <div class="col-md-8 col-lg-6 m-l-r-auto">
                            <div class="blo3 flex-w flex-col-l-sm m-b-30">
                                <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                                    <a href="{{ route('cart.show', $item->id) }}"><img src={{ $item->image }}
                                            alt="IMG-MENU"></a>
                                </div>

                                <div class="text-blo3 size21 flex-col-l-m">
                                    <a href="{{ route('cart.show', $item->id) }}" class="txt21 m-b-3">
                                        {{ $item->nom }}
                                    </a>

                                    <span class="txt23">
                                        {{ $item->description }}
                                    </span>

                                    <span class="txt22 m-t-20">
                                        {{ $item->prix }} MAD
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach


            </div>
    </section>


    <!-- Dinner -->
    <section class="section-dinner bgwhite">
        <div class="header-dinner parallax0 parallax100"
            style="background-image: url(clientpage/images/header-menu-02.jpg);">
            <div class="bg1-overlay t-center p-t-170 p-b-165">
                <h2 class="tit4 t-center">
                    Dinner
                </h2>
            </div>
        </div>

        <div class="container">
            <div class="row p-t-108 p-b-70">

                    @foreach ($dinners as $item)
                        <div class="col-md-8 col-lg-6 m-l-r-auto">
                            <div class="blo3 flex-w flex-col-l-sm m-b-30">
                                <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                                    <a href="{{ route('cart.show', $item->id) }}"><img src={{ $item->image }}
                                            alt="IMG-MENU"></a>
                                </div>

                                <div class="text-blo3 size21 flex-col-l-m">
                                    <a href="{{ route('cart.show', $item->id) }}" class="txt21 m-b-3">
                                        {{ $item->nom }}
                                    </a>

                                    <span class="txt23">
                                        {{ $item->description }}
                                    </span>

                                    <span class="txt22 m-t-20">
                                        {{ $item->prix }} MAD
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach



            </div>
        </div>
    </section>
