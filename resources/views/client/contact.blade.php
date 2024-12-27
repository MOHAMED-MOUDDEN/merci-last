@extends('client.layout')

@section('meta')
<title>Merci Laayoune - Contact</title>
<meta name="description" content="Nous sommes là pour vous écouter. Utilisez nos coordonnées pour nous contacter au Merci Laayoune. Que ce soit pour des questions,
des commentaires ou des réservations spéciales, n'hésitez pas à entrer en contact avec notre équipe dévouée.">
    <meta name="keywords" content="Contacter Merci Laayoune, Coordonnées, Questions, Commentaires, Réservations spéciales, Équipe dévouée.">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Merci Laayoune - Contact">
    <meta property="og:url" content="https://www.mercilaayoune.com/clientContact">
    <meta property="og:site_name" content="Merci Laayoune">
@endsection


@section('content')
    @include('client.includes.aside')
    <base href="/public">
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-title-page-02.jpg);">
        <div style="    display: flex;
            flex-direction: column;
            align-items: center;">
                <h2 class="tit6 t-center">
                    Contact

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

<style>
    .tt {
        font-family: Poppins;
        font-weight: 500;
        font-size: 18px;
        color: #333333;
        text-transform: uppercase;
        letter-spacing: 1px
    }




@media (max-width: 992px){
    .col-md-3, .col-sm-3{
        flex: 0 0 50%;
        /* max-width: 50%; */
    }
}

@media (max-width: 576px) {
.col-sm-3, .col-md-3 {
    flex: 0 0 100%;
    width: 25%;
}
}

.it {
    display: flex;
}
.it i {
    margin-right: 5px;
}

.col-sm-3 {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.txt23 {
    max-width: 180px;
}

.google-map {
  padding-bottom: 451px;
  position: relative;
}

.google-map iframe {
  height: 450px;
  width: 100%;
  left: 0;
  top: 0;
  position: absolute;
}

.fa-brands, .fab {
    font-weight: bold;
}
</style>

    <!-- Contact form -->
    <section class="section-contact bg1-pattern p-t-90">


        <div class="container">
            <h3 class="tit7 t-center p-b-62 p-t-105">
                ENVOYEZ-NOUS UN MESSAGE
            </h3>

            <form action="{{ secure_url(route('createContact') )}}" class="wrap-form-reservation size22 m-l-r-auto" method="patch">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
                            Nom complet
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Nom complet">
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

                    <div class="col-12">
                        <!-- Message -->
                        <span class="txt9">
                            Message
                        </span>
                        <textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message" placeholder="Message"></textarea>
                    </div>
                </div>

                <div class="wrap-btn-booking flex-c-m m-t-13">
                    <!-- Button3 -->
                    <button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
                        envoyer
                    </button>
                </div>
            </form>






            <div class = "container-fluid">
                <div class = "row mt-5">
                   <div class = "col-sm-3 col-md-3 col-lg-3 pb-4" >
                        <div class="it">
                            <div >
                                <i class="fas fa-map-marker-alt"></i>
                            </div>

                            <div class="flex-col-l">
                                <span class="tt p-b-10">
                                    Localisation
                                </span>
                            </div>
                        </div>

                        <div>
                            <span class="txt23 size38" >
                                <i class="fas fa-map-marker-alt"></i> En face hotel nagjir, Av Es-smara, Laayoune
                            </span>
                        </div>

                    </div>




                    <div class = "col-sm-3 col-md-3 col-lg-3 pb-4" >
                        <div class="it">
                            <div >
                                <i class="fas fa-envelope"></i>
                            </div>

                            <div class="flex-col-l">
                                <span class="tt p-b-10">
                                    contactez-nous
                                </span>
                            </div>
                        </div>


                        <div style="    display: flex;
                        flex-direction: column;">
                            <span class="txt23 size38" style="    display: flex;align-items: center;">
                                <i class="fas fa-envelope mr-1"></i> Contact@mercilaayoune.com
                            </span>
                            <span class="txt23 size38" style="    display: flex;align-items: center;">
                                <i class="fa-solid fa-globe mr-1"></i>www.mercilaayoune.com
                            </span>
                        </div>

                    </div>


                   <div class = "col-sm-3 col-md-3 col-lg-3 pb-4" >
                        <div class="it">
                            <div >
                                <i class="fas fa-phone"></i>
                            </div>

                            <div class="flex-col-l">
                                <span class="tt p-b-10">
                                    Appelez-nous
                                </span>
                            </div>
                        </div>


                        <span class="txt23 size38">
                            <i class="fas fa-phone mr-1"></i>080-8616369
                        </span>

                        <span class="txt23 size38">
                            <i class="fas fa-phone mr-1"></i>080-8616369
                        </span>
                    </div>






                   <div class = "col-sm-3 col-md-3 col-lg-3 pb-4" >
                        <div class="it">
                            <div >
                                <i class="fas fa-heart"></i>
                            </div>

                            <div class="flex-col-l">
                                <span class="tt p-b-10">
                                    suivez-nous
                                </span>
                            </div>
                        </div>


                        <span class="txt23 size38">
                            <ul class="p-0" style="display:flex">
                                <li class="txt14 m-b-14 mr-2">

                                    <div>
                                        <a href="https://www.facebook.com/mercilaayoune" style="color: #666666;"><i class="fab fa-facebook-f fs-16"></i></a>
                                    </div>

                                </li>

                                <li class="txt14 m-b-14 mr-2">

                                    <div>
                                        <a href="https://www.instagram.com/mercilaayoune1" style="color: #666666;"><i class="fab fa-instagram fs-16"></i></a>
                                    </div>

                                </li>

                                <li class="txt14 m-b-14 mr-2">

                                    <div>
                                        <a href="https://www.tiktok.com/@mercilaayoune" style="color: #666666;"><i class="fab fa-tiktok fs-16"></i></a>
                                    </div>

                                </li>

                                <li class="txt14 m-b-14 mr-2">

                                    <div>
                                        <a href="https://t.snapchat.com/Df0EWYBp" style="color: #666666;"><i class="fa-brands fa-snapchat"></i></a>
                                    </div>

                                </li>
                            </ul>
                        </span>
                    </div>











                </div>
             </div>



        </div>
    </section>







    <!-- Map -->
    <section class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.1794475737815!2d-13.199997324777996!3d27.150643649825604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc3773a103f1c107%3A0xa1eb7796bf4aba3!2sMerci%20Laayoune!5e0!3m2!1sen!2s!4v1692271441632!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>





    <script src="{{ secure_asset('assets/js/jquery.js') }}"></script>
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
                    <p>Votre message est envoyé avec succès</p>
                    {{-- <a class="btn btn-outline-success" href="{{ route('clientIndex.index') }}">Fermer</a> --}}
                    <button class="btn btn-outline-success">Fermer</button>
                </div>
            </div>

        </div>
    </div>
  </div>






@if ($msg = Session::get('succes'))


    @php
         echo '<script type="text/javascript">
            $(document).ready(function(){
                $("#exampleModalCenter").modal("show");
            });
        </script>';
    @endphp

@endif


@endsection
