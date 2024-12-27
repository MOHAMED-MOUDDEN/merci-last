@extends('client.layout')


@section('meta')
<title>Merci Laayoune - Reservation</title>
<meta name="description" content="Réservez votre table au Merci Laayoune et préparez-vous à vivre une expérience gustative exceptionnelle dans notre café
salon de thé. Choisissez votre date, heure et nombre de convives pour profiter de notre ambiance accueillante et de notre délicieux menu.">
<meta name="keywords" content="Réservation table, Réserver café Laayoune, Expérience gustative, Ambiance accueillante,
Menu délicieux, Nombre de convives, Café salon de thé.">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Merci Laayoune - Reservation">
    <meta property="og:url" content="https://www.mercilaayoune.com/clientReservation">
    <meta property="og:site_name" content="Merci Laayoune">
@endsection


@section('content')
    @include('client.includes.aside')
    <base href="/public">




    <style>
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
    </style>









    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-title-page-02.jpg);">
        <div style="    display: flex;
            flex-direction: column;
            align-items: center;">
                <h2 class="tit6 t-center">
                    Reservation

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
    <!-- Reservation -->
    <section class="section-reservation bg1-pattern p-t-100 p-b-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-b-30">
                    <div class="t-center">
                        <span class="tit2 t-center">
                            Reservation
                        </span>

                        <h3 class="tit3 t-center m-b-35 m-t-2">
                            réserver une table
                        </h3>
                    </div>

                    <form action="{{secure_url( route('createReservation')) }}" class="wrap-form-reservation size22 m-l-r-auto"
                        method="patch">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Date -->
                                <span class="txt9">
                                    Date
                                </span>

                                <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text"
                                        name="date">
                                    <i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="col-md-4">
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
                            </div>

                            <div class="col-md-4">
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
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <!-- Name -->
                                <span class="txt9">
                                    Nom complet
                                </span>

                                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nom"
                                        placeholder="Nom complet">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <!-- Phone -->
                                <span class="txt9">
                                    Telephone
                                </span>

                                <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone"
                                        placeholder="Telephone">
                                </div>
                            </div>

                            <div class="col-md-4">
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
            </div>



            <div class="m-t-80" style="display: flex;
            flex-direction: column;
            align-items: center;">
                <h4 class="txt5 m-b-18">

                    RÉSERVER autrement
                </h4>

                <p class="size25">

                    Appelez <span class="txt24"> 06 36 69 30 87</span> (7j/7 et de 8h à 20h) <br>
                    Ou contactez <span class="txt24">Contact@mercilaayoune.com</span>

                </p>
            </div>

        </div>
    </section>



<script src="assets/js/jquery.js"></script>
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
                    <h1>Merci !</h1>
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
