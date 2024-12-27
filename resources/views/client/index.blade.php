@extends('client.layout')

@section('meta')
<title>Merci Laayoune - Accueil</title>
<meta name="description" content="Merci Laayoune est un élégant café salon de thé avec une charmante terrasse
    située au cœur de la ville de Laayoune. Notre ambiance chaleureuse et notre menu raffiné vous invitent à vous
    détendre et à savourer des moments de convivialité. Profitez de notre vaste sélection de boissons chaudes et froides,
    de délicieuses pâtisseries fraîchement préparées et de plats légers. Que ce soit pour une pause délicieuse ou une
    rencontre entre amis, Merci Laayoune vous accueille avec un service attentionné et un cadre accueillant.">
    <meta name="keywords" content="MerciLaayoune, Café Laayoune, Salon de thé, Terrasse en plein air, Boissons chaudes,
        Pâtisseries fraîches, Cuisine locale, Ambiance chaleureuse, Convivialité, Rencontre entre amis,
        Détente, Service attentionné, Menu raffiné, Élégance.">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Merci Laayoune - Accueil">
    <meta property="og:url" content="https://www.mercilaayoune.com/">
    <meta property="og:site_name" content="Merci Laayoune">
@endsection

@section('content')
    <base href="/public">
    @include('client.includes.aside')



    <style>
        .checked {
    color: orange;
    }
        .card {
            margin-bottom: 24px;
            -webkit-box-shadow: 0 2px 3px #e4e8f0;
            box-shadow: 0 2px 3px #e4e8f0;
        }
        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 100%;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #eff0f2;
            border-radius: 1rem;
        }
        .activity-checkout {
            list-style: none
        }

        .activity-checkout .checkout-icon {
            position: absolute;
            top: -4px;
            left: -24px
        }

        .activity-checkout .checkout-item {
            position: relative;
            padding-bottom: 24px;
            padding-left: 35px;
            border-left: 2px solid #f5f6f8
        }

        .activity-checkout .checkout-item:first-child {
            border-color: #3b76e1
        }

        .activity-checkout .checkout-item:first-child:after {
            background-color: #3b76e1
        }

        .activity-checkout .checkout-item:last-child {
            border-color: transparent
        }

        .activity-checkout .checkout-item.crypto-activity {
            margin-left: 50px
        }

        .activity-checkout .checkout-item .crypto-date {
            position: absolute;
            top: 3px;
            left: -65px
        }



        .avatar-xs {
            height: 1rem;
            width: 1rem
        }

        .avatar-sm {
            height: 2rem;
            width: 2rem
        }

        .avatar {
            height: 3rem;
            width: 3rem
        }

        .avatar-md {
            height: 4rem;
            width: 4rem
        }

        .avatar-lg {
            height: 5rem;
            width: 5rem
        }

        .avatar-xl {
            height: 6rem;
            width: 6rem
        }

        .avatar-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #111111;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-weight: 500;
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%
        }

        .avatar-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 8px
        }

        .avatar-group .avatar-group-item {
            margin-left: -8px;
            border: 2px solid #fff;
            border-radius: 50%;
            -webkit-transition: all .2s;
            transition: all .2s
        }

        .avatar-group .avatar-group-item:hover {
            position: relative;
            -webkit-transform: translateY(-2px);
            transform: translateY(-2px)
        }

        .card-radio {
            background-color: #fff;
            border: 2px solid #eff0f2;
            border-radius: .75rem;
            padding: .5rem;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: block
        }

        .card-radio:hover {
            cursor: pointer
        }

        .card-radio-label {
            display: block
        }

        .edit-btn {
            width: 35px;
            height: 35px;
            line-height: 40px;
            text-align: center;
            position: absolute;
            right: 25px;
            margin-top: -50px
        }

        .card-radio-input {
            display: none
        }

        .card-radio-input:checked+.card-radio {
            border-color: #3b76e1!important
        }


        .font-size-16 {
            font-size: 16px!important;
        }
        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        a {
            text-decoration: none!important;
        }


        .form-control {
            display: block;
            width: 100%;
            padding: 0.47rem 0.75rem;
            font-size: .875rem;
            font-weight: 400;
            line-height: 1.5;
            color: #545965;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e2e5e8;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.75rem;
            -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        }

        .edit-btn {
            width: 35px;
            height: 35px;
            line-height: 40px;
            text-align: center;
            position: absolute;
            right: 25px;
            margin-top: -50px;
        }

        .ribbon {
            position: absolute;
            right: -26px;
            top: 20px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            color: #fff;
            font-size: 13px;
            font-weight: 500;
            padding: 1px 22px;
            font-size: 13px;
            font-weight: 500
        }




        @media (min-width: 1200px)
            { .mod-8{
                flex: 0 0 60%;
                max-width: 60%;
            }
            }

        @media (min-width: 1200px)
            { .mod-4{
                flex: 0 0 40%;
                max-width: 40%;
            }
            }



        .mod-4c {
        max-width: 50%;
        flex: 0 0 50%;
        }


        .user {
            object-fit: cover;
            width: 100%;
            height: 100%;
                }

        .user-border {
            width: 90px;
            height: 90px;
        }
    </style>




    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1" style="background-image: url(clientpage/images/slide1-01.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                            Welcome to
                        </span>

                        <h3 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            {{-- Merci Laayoune --}}
                            <img class="mercilogo"  src="clientpage/images/MERCI_IMG/LOGO/Logo-Merci-b1.png" alt="" >
                        </h3>
                        <h3 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            <div style="    display: flex;
                            align-items: center;">
                                <a href="https://www.facebook.com/mercilaayoune"><img src="clientpage/images/MERCI_IMG/social-media-merci/facebook-app-symbol-merci.png" alt="" width="22px"></a>
                                <a href="https://www.instagram.com/mercilaayoune1"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/instagram-merci.png" alt="" width="22px"></a>
                                <a href="https://www.tiktok.com/@mercilaayoune"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/tik-tok-merci.png" alt="" width="22px"></a>
                                <a href="https://t.snapchat.com/Df0EWYBp"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/snapchat.png" alt="" width="22px"></a>
                                <a href="https://shorturl.at/cnrt1"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/pin-merci.png" alt="" width="22px"></a>
                            </div>
                        </h3>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
                            <!-- Button1 -->
                            <a href="{{ route('clientMenu.index') }}" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                Voir Menu
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item2-slick1"
                    style="background-image: url(clientpage/images/master-slides-02.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
                            Welcome to
                        </span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                            <img class="mercilogo"  src="clientpage/images/MERCI_IMG/LOGO/Logo-Merci-b1.png" alt="" >
                        </h2>

                        <h3 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            <div style="    display: flex;
                            align-items: center;">
                                <a href="https://www.facebook.com/mercilaayoune"><img src="clientpage/images/MERCI_IMG/social-media-merci/facebook-app-symbol-merci.png" alt="" width="22px"></a>
                                <a href="https://www.instagram.com/mercilaayoune1"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/instagram-merci.png" alt="" width="22px"></a>
                                <a href="https://www.tiktok.com/@mercilaayoune"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/tik-tok-merci.png" alt="" width="22px"></a>
                                <a href="https://t.snapchat.com/Df0EWYBp"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/snapchat.png" alt="" width="22px"></a>
                                <a href="https://shorturl.at/cnrt1"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/pin-merci.png" alt="" width="22px"></a>
                            </div>
                        </h3>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
                            <!-- Button1 -->
                            <a href="{{ route('clientMenu.index') }}" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                Voir Menu
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item3-slick1"
                    style="background-image: url(clientpage/images/master-slides-01.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15"
                            data-appear="rotateInDownLeft">
                            Welcome to
                        </span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37"
                            data-appear="rotateInUpRight">
                            <img class="mercilogo"  src="clientpage/images/MERCI_IMG/LOGO/Logo-Merci-b1.png" alt="" >
                        </h2>

                        <h3 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            <div style="    display: flex;
                            align-items: center;">
                                <a href="https://www.facebook.com/mercilaayoune"><img src="clientpage/images/MERCI_IMG/social-media-merci/facebook-app-symbol-merci.png" alt="" width="22px"></a>
                                <a href="https://www.instagram.com/mercilaayoune1"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/instagram-merci.png" alt="" width="22px"></a>
                                <a href="https://www.tiktok.com/@mercilaayoune"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/tik-tok-merci.png" alt="" width="22px"></a>
                                <a href="https://t.snapchat.com/Df0EWYBp"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/snapchat.png" alt="" width="22px"></a>
                                <a href="https://shorturl.at/cnrt1"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/pin-merci.png" alt="" width="22px"></a>
                            </div>
                        </h3>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
                            <!-- Button1 -->
                            <a href="{{ route('clientMenu.index') }}" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                Voir Menu
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="wrap-slick1-dots"></div>
        </div>
    </section>

    <!-- Welcome -->
    <section class="section-welcome bg1-pattern p-t-120 p-b-105">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-welcome t-center">
                        <span class="tit2 t-center">
                            Italien Restaurant
                        </span>

                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            Welcome
                        </h3>

                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            Italien cuisine and its rich flavors, spices and herbs are becoming increasingly popular as
                            tourism to Italie continues to flourish and more and more people are introduced to Italien
                            food. </p>

                        <a href="{{ route('clientAbout.index') }}" class="txt4">
                            Our Story
                            <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src={{ asset('clientpage/images/our-story-01.jpg') }} alt="IMG-OUR">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro -->
    <section class="section-intro">
        <div class="header-intro parallax100 t-center p-t-50 p-b-50"
            style="background-image: url(clientpage/images/bg-intro-01.jpg);">
            <span class="tit2 p-l-15 p-r-15">
                Discover
            </span>


            <div style="    display: flex;
            flex-direction: column;
            align-items: center;">
                <div class="mb-4" >
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



        </div>

        <div class="content-intro bg-white p-t-77 p-b-133">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 p-t-30">
                        <!-- Block1 -->
                        <div class="blo1">
                            <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                                <a href="{{ route('clientAbout.index') }}"><img src={{ asset('clientpage/images/intro-01.jpg') }}
                                        alt="IMG-INTRO"></a>
                            </div>

                            <div class="wrap-text-blo1 p-t-35">
                                <a href="{{ route('clientAbout.index') }}">
                                    <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        Romantic Restaurant
                                    </h4>
                                </a>

                                <p class="m-b-20">
                                    Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
                                </p>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 p-t-30">
                        <!-- Block1 -->
                        <div class="blo1">
                            <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                                <a href="{{ route('clientAbout.index') }}"><img src={{ asset('clientpage/images/intro-02.jpg') }}
                                        alt="IMG-INTRO"></a>
                            </div>

                            <div class="wrap-text-blo1 p-t-35">
                                <a href="{{ route('clientAbout.index') }}">
                                    <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        Delicious Food
                                    </h4>
                                </a>

                                <p class="m-b-20">
                                    Aliquam eget aliquam magna, quis posuere risus ac justo ipsum nibh urna
                                </p>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 p-t-30">
                        <!-- Block1 -->
                        <div class="blo1">
                            <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                                <a href="{{ route('clientAbout.index') }}"><img src={{ asset('clientpage/images/intro-04.jpg') }}
                                        alt="IMG-INTRO"></a>
                            </div>

                            <div class="wrap-text-blo1 p-t-35">
                                <a href="{{ route('clientAbout.index') }}">
                                    <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        Red Wines You Love
                                    </h4>
                                </a>

                                <p class="m-b-20">
                                    Sed ornare ligula eget tortor tempor, quis porta tellus dictum.
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Our menu -->
    <section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
        <div class="container">
            <div class="title-section-ourmenu t-center m-b-22">
                <span class="tit2 t-center">
                    Discover
                </span>

                <h3 class="tit5 t-center m-t-2">
                    Our Menu
                </h3>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src={{ asset('clientpage/images/our-menu-01.jpg') }} alt="IMG-MENU">

                                <!-- Button2 -->
                                <a href="{{ route('clientMenu.index') }}" class="btn2 flex-c-m txt5 ab-c-m size4">
                                    Lunch
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src={{ asset('clientpage/images/our-menu-05.jpg') }} alt="IMG-MENU">

                                <!-- Button2 -->
                                <a href="{{ route('clientMenu.index') }}" class="btn2 flex-c-m txt5 ab-c-m size5">
                                    Dinner
                                </a>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src={{ asset('clientpage/images/our-menu-13.jpg') }} alt="IMG-MENU">

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
                                <img src={{ asset('clientpage/images/our-menu-08.jpg') }} alt="IMG-MENU">

                                <!-- Button2 -->
                                <a href="{{ route('clientMenu.index') }}" class="btn2 flex-c-m txt5 ab-c-m size7">
                                    Drink
                                </a>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src={{ asset('clientpage/images/our-menu-10.jpg') }} alt="IMG-MENU">

                                <!-- Button2 -->
                                <a href="{{ route('clientMenu.index') }}" class="btn2 flex-c-m txt5 ab-c-m size8">
                                    Starters
                                </a>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src={{ asset('clientpage/images/our-menu-16.jpg') }} alt="IMG-MENU">

                                <!-- Button2 -->
                                <a href="{{ route('clientMenu.index') }}" class="btn2 flex-c-m txt5 ab-c-m size9">
                                    Dessert
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <!-- Booking -->
    <section class="section-booking bg1-pattern p-t-100 p-b-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-b-30">
                    <div class="t-center">
                        <span class="tit2 t-center">
                            Reservation
                        </span>

                        <h3 class="tit3 t-center m-b-35 m-t-2">
                            Réserver une table
                        </h3>
                    </div>

                    <form action="{{ secure_url(route('createreservation')) }}" class="wrap-form-booking" method="patch">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Date -->
                                <span class="txt9">
                                    Date
                                </span>

                                <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text"
                                        name="date">
                                    <i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18"
                                        aria-hidden="true"></i>
                                </div>

                                <!-- Time -->
                                <span class="txt9">
                                    Horaire
                                </span>

                                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <!-- Select2 -->
                                    <select class="selection-1" name="heure">
                                        <option>9:00</option>
                                        <option>9:30</option>
                                        <option>10:00</option>
                                        <option>10:30</option>
                                        <option>11:00</option>
                                        <option>11:30</option>
                                        <option>12:00</option>
                                        <option>12:30</option>
                                        <option>13:00</option>
                                        <option>13:30</option>
                                        <option>14:00</option>
                                        <option>14:30</option>
                                        <option>15:00</option>
                                        <option>15:30</option>
                                        <option>16:00</option>
                                        <option>16:30</option>
                                        <option>17:00</option>
                                        <option>17:30</option>
                                        <option>18:00</option>
                                    </select>
                                </div>

                                <!-- People -->
                                <span class="txt9">
                                    Personnes
                                </span>

                                <div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <!-- Select2 -->
                                    <select class="selection-1" name="gens">
                                        <option>1 person</option>
                                        <option>2 people</option>
                                        <option>3 people</option>
                                        <option>4 people</option>
                                        <option>5 people</option>
                                        <option>6 people</option>
                                        <option>7 people</option>
                                        <option>8 people</option>
                                        <option>9 people</option>
                                        <option>10 people</option>
                                        <option>11 people</option>
                                        <option>12 people</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Name -->
                                <span class="txt9">
                                    Nom complet
                                </span>

                                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nom"
                                        placeholder="Nom complet">
                                </div>

                                <!-- Phone -->
                                <span class="txt9">
                                    Telephone
                                </span>

                                <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone"
                                        placeholder="Telephone">
                                </div>

                                <!-- Email -->
                                <span class="txt9">
                                    Email
                                </span>

                                <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email"
                                        placeholder="Email">
                                </div>
                            </div>
                        </div>

                        <div class="wrap-btn-booking flex-c-m m-t-6">
                            <!-- Button3 -->
                            <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                Réserver une table
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 p-b-30 p-t-18">
                    <div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src={{ asset('clientpage/images/booking-01.jpg') }} alt="IMG-OUR">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Review -->
    <section class="section-review bg2-pattern p-t-115">
        <!-- - -->
        <div class="title-review t-center m-b-2">
            <span class="tit2 p-l-15 p-r-15">
                Les clients disent
            </span>

            <h3 class="tit8 t-center p-l-20 p-r-15 p-t-3">
                Review
            </h3>
        </div>



        <div class="container">
            <div class="row">
                <div class="splide">
                    <div class="splide__track">
                        <div class="splide__list">
                            @foreach ($reviews as $review)

                            <div class="col-sm-4 splide__slide m-2">
                                <div class="card  text-dark">
                                    <a style="text-decoration: none; color:#000000" href="https://shorturl.at/giwF9">
                                    <div class="card-body">
                                            <div style="    display: flex;
                                            align-items: center;
                                            flex-direction: column;
                                        }" class="mb-1">
                                                 <div class="pic-blo5 bo4 wrap-cir-pic hov-img-zoom user-border" >
                                                    @if (is_null($review->image))

                                                        <img src="clientpage/images/profile.webp" alt="{{ $review->image }}" class="user">



                                                    @else

                                                    <img src="{{ $review->image }}" alt="{{ $review->image }}" class="user">

                                                    @endif
                                                </div>
                                                <div class="my-2" style="display: flex;
                                                flex-direction: column;
                                                align-items: center;">
                                                    <h5 class="card-title">{{$review->nom}}</h5>
                                                    <span>
                                                        @php
                                                            $i = 0;
                                                        @endphp
                                                        @while ($i < $review->rate)
                                                            <i class="fa fa-star checked"></i>
                                                            @php
                                                            $i++;
                                                            @endphp
                                                        @endwhile
                                                        @for ($i; $i < 5; $i++)
                                                        <i class="fa fa-star"></i>
                                                        @endfor
                                                    </span>
                                                </div>

                                            </div>



                                        <p class="card-text">{{$review->comment}}</p>


                                    </div>
                                </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
<script>
    var splide = new Splide('.splide', {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        rewind: true,
        breakpoints: {
            992: {
                perPage: 2,
                gap: '.7rem',
            },
            480: {
                perPage: 1,
                gap: '.7rem',
            },
        },
    });
    splide.mount();

</script>




            <!-- Reveiw -->

<script src="{{ secure_asset('assets/js/jquery.js') }}"></script>
    @if ($msg = Session::get('msg'))

            <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="vh-100 d-flex justify-content-center align-items-center">
                <div class="card col-md-4 bg-white shadow-md p-5">
                    <div class="mb-4 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                            fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg>
                    </div>
                    <div class="text-center">
                        <h1>merci !</h1>
                        {{-- <p>{{$msg}}</p> --}}
                        <p>Votre commande est retenue</p>
                        <button class="btn btn-outline-success">Fermer</button>
                    </div>
                </div>

            </div>
        </div>
      </div>
        @php
             echo '<script type="text/javascript">
                $(document).ready(function(){
                    $("#exampleModalCenter").modal("show");
                });
            </script>';
        @endphp

    @endif
@endsection
