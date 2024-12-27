@extends('client.layout')


@section('meta')
<title>Merci Laayoune - À propos</title>
<meta name="description" content="Merci Laayoune est un élégant café salon de thé avec une charmante terrasse 
    située au cœur de la ville de Laayoune. Notre ambiance chaleureuse et notre menu raffiné vous invitent à vous
    détendre et à savourer des moments de convivialité. Profitez de notre vaste sélection de boissons chaudes et froides, 
    de délicieuses pâtisseries fraîchement préparées et de plats légers. Que ce soit pour une pause délicieuse ou une 
    rencontre entre amis, Merci Laayoune vous accueille avec un service attentionné et un cadre accueillant.">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Merci Laayoune - À propos">
    <meta property="og:url" content="https://www.mercilaayoune.com/clientAbout">
    <meta property="og:site_name" content="Merci Laayoune">
@endsection


@section('content')
    @include('client.includes.aside')
    <base href="/public">
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-title-page-03.jpg);">
        <div style="    display: flex;
            flex-direction: column;
            align-items: center;">
                <h2 class="tit6 t-center">
                    à propos
                    
                </h2>
        
                <div class="mb-4" >
                    {{-- Merci Laayoune --}}
                    <img class="mercilogo-autre"  src="clientpage/images/MERCI_IMG/LOGO/Logo-Merci-b1.png" alt="" >
                </div>
                
                <div style="    display: flex;
                align-items: center;">
                    <a href="https://www.facebook.com/mercilaayoune"><img src="clientpage/images/MERCI_IMG/social-media-merci/facebook-app-symbol-merci.png" alt="" width="22px"></a>
                    <a href="https://www.instagram.com/mercilaayoune1"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/instagram-merci.png" alt="" width="22px"></a>
                    <a href="https://www.tiktok.com/@mercilaayoune"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/tik-tok-merci.png" alt="" width="22px"></a>
                    <a href="https://t.snapchat.com/Df0EWYBp"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/snapchat.png" alt="" width="22px"></a>
                    <a href="https://shorturl.at/cnrt1"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/pin-merci.png" alt="" width="22px"></a>
                </div>
            
        </div>
    </section>


    <!-- Our Story -->
    <section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
        <span class="tit2 t-center">
            Italian Restaurant
        </span>

        <h3 class="tit3 t-center m-b-35 m-t-5">
            Our Story
        </h3>

        <p class="t-center size32 m-l-r-auto">
            Magnificent Italy attracts travelers eager to explore its stunning landscapes, unique culture and
            its gastronomic delights. With its rich cuisine, this beautiful Mediterranean land offers countless dishes
            famous and traditional must-sees.
            A multitude of delicacies and popular Italian dishes, sweet and savory, await your discovery during
            your stays when you are in Italy at <span style="color:red"> Asebbane restaurant</span>
            . These traditional Italian dishes are
            deeply rooted in
            Italian culture, and recipes are often passed down from generation to generation and are cherished for
            their authentic origins. </p>
    </section>


    <!-- Video -->
    <section class="section-video parallax100" style="background-image: url(clientpage/images/header-menu-01.jpg);">
        <div style="display: flex;
        flex-direction: column;
        align-items: center;" class=" p-t-70 p-b-70">


        

                <span class="tit2 p-l-15 p-r-15" style="font-size: 70px; color:#fff; text-align: center;">
                    Découvrir notre Menu
                </span>
                <div class="mt-3">
                    <!-- Button1 -->
                    <a href="{{ route('clientReservation.index') }}" class="btn1 flex-c-m size1 txt3 trans-0-4 btn-menu" onmousemove="alter1();" onmouseout="alter2();">
                        Voir Menu
                    </a>
                </div>


            </div>
        </div>
    </section>



    <!-- Delicious & Romantic-->
    <section class="bg1-pattern p-t-120 p-b-105">
        <div class="container">
            <!-- Delicious -->
            <div class="row">
                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-delicious t-center">
                        <span class="tit2 t-center">
                            Delicious
                        </span>

                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            RECIPES
                        </h3>

                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            The best recipes for you
                            with high quality and special taste, totally organic and very delicious, only from us and
                            especially for you. </p>
                    </div>
                </div>

                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src={{ asset('clientpage/images/our-story-01.jpg') }} alt="IMG-OUR">
                    </div>
                </div>
            </div>


            <!-- Romantic -->
            <div class="row p-t-170">
                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src={{ asset('clientpage/images/our-story-02.jpg') }} alt="IMG-OUR">
                    </div>
                </div>

                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-romantic t-center">
                        <span class="tit2 t-center">
                            our
                        </span>

                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            place
                        </h3>

                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            Our magnificent place restaurant is a real gastronomic gem. As soon as you walk through your
                            doors, you are transported to a world of exquisite flavors and refined elegance.
                            The atmosphere that reigns in our restaurant is both warm and sophisticated. The carefully
                            chosen decoration creates an atmosphere that is both modern and timeless. Tastefully set tables
                            and dimmed lights add a touch of romance to the whole thing, making it the perfect spot for a
                            night out or special celebration.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Banner -->
    <div class="parallax0 parallax100" style="background-image: url(clientpage/images/bg-cover-video-02.jpg);">
        
        <div style="display: flex;
        flex-direction: column;
        align-items: center;" class=" p-t-70 p-b-70">


                <span class="tit2 p-l-15 p-r-15" style="font-size: 70px; color: #fff; text-align: center;">
                    Reserver une table
                </span>
                <div class="mt-3">
                    <!-- Button1 -->
                    <a href="{{ route('clientMenu.index') }}" class="btn1 flex-c-m size1 txt3 trans-0-4 btn-menu" onmousemove="alter1();" onmouseout="alter2();">
                        Reservation
                    </a>
                </div>


            </div>
        </div>
    </div>


    <!-- Chef -->
    <section class="section-chef bgwhite p-t-115 p-b-95">
        <div class="container t-center">
            <span class="tit2 t-center">
                Rencontrer notre
            </span>

            <h3 class="tit5 t-center m-b-50 m-t-5">
                équipe
            </h3>

            <div class="row">
                @foreach ($chefs as $chef)
                    <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                        <!-- -Block5 -->
                        <div class="blo5 pos-relative p-t-60">
                            <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                                <img style="object-fit: cover;
                                width: 100%;
                                height: 100%;" src={{ $chef->image }} alt="{{ $chef->image }}">
                            </div>

                            <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                                <div class="txt34 dis-block p-b-6">
                                    {{ $chef->nom }}
                                </div>

                                <span class="dis-block t-center txt35 p-b-25">
                                    Chef
                                </span>

                                <p class="t-center">
                                    {{ $chef->bio }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
