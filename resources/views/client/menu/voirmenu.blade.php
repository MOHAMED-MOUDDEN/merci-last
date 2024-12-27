@extends('client.layout')

@section('content')
<base href="/public">
@include('client.includes.aside')
<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
    style="background-image: url('{{ asset('clientpage/images/bg-title-page-03.jpg') }}');">
    <div style="display: flex; flex-direction: column; align-items: center;">
        <h2 class="tit6 t-center">
            Notre menu
        </h2>

        <div class="mb-4">
            {{-- Merci Laayoune --}}
            <img class="mercilogo-autre" src="{{ asset('clientpage/images/MERCI_IMG/LOGO/Logo-Merci-b1.png') }}" alt="">
        </div>

        <div style="display: flex; align-items: center;">
            <a href="https://www.facebook.com/mercilaayoune">
                <img src="{{ asset('clientpage/images/MERCI_IMG/social-media-merci/facebook-app-symbol-merci.png') }}" alt="" width="22px">
            </a>
            <a href="https://www.instagram.com/mercilaayoune1">
                <img class="ml-2" src="{{ asset('clientpage/images/MERCI_IMG/social-media-merci/instagram-merci.png') }}" alt="" width="22px">
            </a>
            <a href="https://www.tiktok.com/@mercilaayoune">
                <img class="ml-2" src="{{ asset('clientpage/images/MERCI_IMG/social-media-merci/tik-tok-merci.png') }}" alt="" width="22px">
            </a>
            <a href="https://t.snapchat.com/Df0EWYBp">
                <img class="ml-2" src="{{ asset('clientpage/images/MERCI_IMG/social-media-merci/snapchat.png') }}" alt="" width="22px">
            </a>
            <a href="https://shorturl.at/cnrt1">
                <img class="ml-2" src="{{ asset('clientpage/images/MERCI_IMG/social-media-merci/pin-merci.png') }}" alt="" width="22px">
            </a>
        </div>
    </div>
</section>

<!-- Our menu -->
<section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
    <div class="container">
        <div class="title-section-ourmenu t-center m-b-22">
            <span class="tit2 t-center">
                Découvrir
            </span>

            <h3 class="tit5 t-center m-t-2">
                Notre menu
            </h3>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Item our menu -->
                        <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                            <img src={{ asset('clientpage/images/our-menu-01.jpg') }} alt="IMG-MENU" class="img-fluid">

                            <!-- Button2 -->
                            <a href="{{ route('clientMenu.index') }}" class="btn2 flex-c-m txt5 ab-c-m size4">
                                Déjeuner
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- Item our menu -->
                        <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                            <img src={{ asset('clientpage/images/our-menu-05.jpg') }} alt="IMG-MENU" class="img-fluid">

                            <!-- Button2 -->
                            <a href="#brunches" class="btn2 flex-c-m txt5 ab-c-m size5">
                                Dîner
                            </a>
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- Item our menu -->
                        <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                            <img src={{ asset('clientpage/images/our-menu-13.jpg') }} alt="IMG-MENU" class="img-fluid">

                            <!-- Button2 -->
                            <a href="{{ route('clientMenu.index') }}" class="btn2 flex-c-m txt5 ab-c-m size6">
                                Happy Hour
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-12">
                        <!-- Item our menu -->
                        <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                            <img src={{ asset('clientpage/images/our-menu-08.jpg') }} alt="IMG-MENU" class="img-fluid">

                            <!-- Button2 -->
                            <a href="{{ route('clientMenu.index') }}" class="btn2 flex-c-m txt5 ab-c-m size7">
                                Boire
                            </a>
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- Item our menu -->
                        <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                            <img src={{ asset('clientpage/images/our-menu-10.jpg') }} alt="IMG-MENU" class="img-fluid">

                            <!-- Button2 -->
                            <a href="#Petits" class="btn2 flex-c-m txt5 ab-c-m size5">
                                Entrées                            </a>
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- Item our menu -->
                        <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                            <img src={{ secure_asset('clientpage/images/our-menu-16.jpg') }} alt="IMG-MENU" class="img-fluid">

                            <!-- Button2 -->
                            <a href="#supplements" class="btn2 flex-c-m txt5 ab-c-m size9">
                                Dessert
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <span id="Petits"></span>

</section>

<!-- Section: Petits Déjeuners -->
<section class="section-lunch bgwhite">
    <div class="header-lunch parallax0 parallax100"
        style="background-image: url('{{ secure_asset('clientpage/images/header-menu-01.jpg') }}');">
        <div class="bg1-overlay t-center p-t-50 p-b-50">
            <h2 class="tit4 t-center">Petits Déjeuners</h2>
        </div>
    </div>

    <div class="container">
        <div class="row p-t-108 p-b-70">
            @foreach ($petitsDejeuners as $item)
            <div class="col-md-4 col-lg-4 m-l-r-auto">
                    <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                            <a href="{{ route('cart.show', $item->id) }}">
                                <img src="{{ secure_asset( $item->image) }}" alt="IMG-MENU" class="img-fluid">
                            </a>
                        </div>
                        <div class="text-blo3 size21 flex-col-l-m">
                            <a href="{{ route('cart.show', $item->id) }}" class="txt21 m-b-3">
                                {{ $item->nom }}
                            </a>
                            <span class="txt23">
                                {{ $item->description }}
                            </span>
                            <div style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
                                <span class="txt22">{{ $item->prix }} MAD</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <span id="brunches"></span>
</section>

<!-- Section: Brunches -->

<section  class="section-lunch bgwhite">
    <div class="header-lunch parallax0 parallax100"
        style="background-image: url('{{ secure_asset('clientpage/images/header-menu-02.jpg') }}');">
        <div class="bg1-overlay t-center p-t-50 p-b-50">
            <h2  class="tit4 t-center">Brunches</h2>
        </div>
    </div>

    <div class="container">
        <div class="row p-t-108 p-b-70">
            @foreach ($brunch as $item)
            <div class="col-md-4 col-lg-4 m-l-r-auto">
                    <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                            <a href="{{ route('cart.show', $item->id) }}">
                                <img src="{{ secure_asset($item->image) }}" alt="IMG-MENU" class="img-fluid">

                            </a>
                        </div>
                        <div class="text-blo3 size21 flex-col-l-m">
                            <a href="{{ route('cart.show', $item->id) }}" class="txt21 m-b-3">
                                {{ $item->nom }}
                            </a>
                            <span class="txt23">
                                {{ $item->description }}
                            </span>
                            <div style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
                                <span class="txt22">{{ $item->prix }} MAD</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Section: Supplements -->
<section class="section-lunch bgwhite">
    <div class="header-lunch parallax0 parallax100"
    style="background-image: url('{{ secure_asset('clientpage/images/header-menu-02.jpg') }}');">
    <div class="bg1-overlay t-center p-t-50 p-b-50">
            <h2 class="tit4 t-center">Supplements</h2>
        </div>
    </div>

    <div class="container">
        <div class="row p-t-108 p-b-70">
            @foreach ($supplements as $item)
            <div class="col-md-4 col-lg-4 m-l-r-auto">
                    <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                            <a href="{{ route('cart.show', $item->id) }}">
                                <img src="{{ secure_asset( $item->image) }}" alt="IMG-MENU" class="img-fluid">
                            </a>

                        </div>
                        <div class="text-blo3 size21 flex-col-l-m">
                            <a href="{{ route('cart.show', $item->id) }}" class="txt21 m-b-3">
                                {{ $item->nom }}
                            </a>
                            <span class="txt23">
                                {{ $item->description }}
                            </span>
                            <div style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
                                <span class="txt22">{{ $item->prix }} MAD</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
