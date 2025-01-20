@extends('client.command')


@section('meta')
<title>Merci Laayoune - Commande</title>
<meta name="description" content="Préparez-vous à finaliser votre commande au Merci Laayoune. Remplissez les informations nécessaires,
telles que les détails de livraison et les préférences spéciales, pour que nous puissions vous offrir un service personnalisé et répondre à vos attentes.">
<meta name="keywords" content="Validation commande, Informations de livraison, Préférences spéciales, Service personnalisé, Café Laayoune commande.">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Merci Laayoune - Commande">
    <meta property="og:url" content="https://www.mercilaayoune.com/pannier">
    <meta property="og:site_name" content="Merci Laayoune">
@endsection


@section('validation')
<link rel="stylesheet" type="text/css" href={{ asset('clientpage/css/validation.css') }}>


<div class="container cntnr">

    <div class="row" style="width: 100%;
    margin: auto;">
    @if ($msg = Session::get('error'))
    <div class="alert alert-danger">
        <ul>

            <li>{{ $msg }}</li>

        </ul>

    </div>
@endif


    </div>

 <div class="row">
    <div class="col-xl-8 mod-8">
        {{Session::get('discount')}}
        <div class="card">
            <div class="card-body">
                <div class="p-3 bg-light mb-3" style="display: flex;">
                    <div class="avatar checkout-icon p-1">
                        <div class="avatar-title rounded-circle">
                            <i class="bx bxs-receipt text-white font-size-20"></i>
                        </div>
                    </div>
                    <div class="ml-2">
                         <h5 class="font-size-16 mb-0" style="padding-left:0;">Informations de facturation <span class="float-end ms-2"></span></h5>
                        <p>
                            Saisir vos informations
                        </p>
                    </div>

                </div>
                <ol class="activity-checkout mb-0 px-4 mt-3">
                    <li class="checkout-item">


                        <div class="feed-item-list">
                            <div>

                                <div class="mb-3">

                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif



                                    <form action="{{secure_url( route('reservations.store')) }}" method="POST" id="form">
                                        @csrf
                                        <div>
                                            <div class="mb-3">
                                                <label for="nom" class="form-label">Nom <span style="color: #cf2227">*</span></label>
                                                <input type="text" class="form-control" name="nom" value="{{ old('nom') }}" required>
                                                @error('nom')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email <span style="color: #cf2227">*</span></label>
                                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="date" class="form-label">Date <span style="color: #cf2227">*</span></label>
                                                <input type="date" class="form-control" name="date" value="{{ old('date') }}" required>
                                                @error('date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="heure" class="form-label">Heure <span style="color: #cf2227">*</span></label>
                                                <input type="time" class="form-control" name="heure" value="{{ old('heure') }}" required>
                                                @error('heure')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="gens" class="form-label">Nombre de Gens <span style="color: #cf2227">*</span></label>
                                                <input type="number" class="form-control" name="gens" placeholder="Enter le nombre de personnes" value="{{ old('gens') }}" required>
                                                @error('gens')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone <span style="color: #cf2227">*</span></label>
                                                <input type="text" class="form-control" name="phone" placeholder="Enter phone number" value="{{ old('phone') }}" required>
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>






                                    </div>
                                </div>
                            </li>

                        </ol>
                    </div>
                </div>


            </div>



        <div class="col-xl-4 mod-4">


            <div class="card checkout-order-summary">
                <div class="card-body">
                    <div class="p-3 bg-light mb-3" style="display: flex;">
                        <div class="avatar checkout-icon p-1">
                            <div class="avatar-title rounded-circle">
                                <svg id='Shopping_Cart_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/>


                                    <g transform="matrix(1 0 0 1 12 12)" >
                                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" translate(-11, -12)" d="M 4.4160156 1.9960938 L 1.0039062 2.0136719 L 1.0136719 4.0136719 L 3.0839844 4.0039062 L 6.3789062 11.908203 L 5.1816406 13.822266 C 4.3432852 15.161017 5.3626785 17 6.9414062 17 L 19 17 L 19 15 L 6.9414062 15 C 6.8301342 15 6.8173041 14.978071 6.8769531 14.882812 L 8.0527344 13 L 15.521484 13 C 16.247484 13 16.917531 12.605703 17.269531 11.970703 L 20.871094 5.484375 C 21.242094 4.818375 20.760047 4 19.998047 4 L 5.25 4 L 4.4160156 1.9960938 z M 7 18 C 5.8954305003384135 18 5 18.895430500338414 5 20 C 5 21.104569499661586 5.8954305003384135 22 7 22 C 8.104569499661586 22 9 21.104569499661586 9 20 C 9 18.895430500338414 8.104569499661586 18 7 18 z M 17 18 C 15.895430500338414 18 15 18.895430500338414 15 20 C 15 21.104569499661586 15.895430500338414 22 17 22 C 18.104569499661586 22 19 21.104569499661586 19 20 C 19 18.895430500338414 18.104569499661586 18 17 18 z" stroke-linecap="round" />
                                    </g>
                                    </svg>
                            </div>
                        </div>
                        <div class="ml-2">
                             <h5 class="font-size-16 mb-0" style="padding-left:0;">Commande<span class="float-end ms-2"></span></h5>
                            <p>
                                Voici les Détails de votre commande <br>
                                @if (!is_null(session('oid')))
                                ID {{ session('oid') }}
                                @endif
                            </p>
                        </div>

                    </div>

                    <div class="table-responsive">











                                @if(isset($price))
                                <input type="hidden" value="{{ $price }}" name="price" id="total">
                                <tr class="bg-light">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Total:</h5>
                                    </td>
                                    <td style="white-space: nowrap;">
                                        {{ $price }} MAD
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td colspan="3">prix !!</td>
                                </tr>
                            @endif




                        <script>
                            var trL = document.getElementById("trLivraison");
                            var trD = document.getElementById("trdiscount");
                            var tdL1 = document.getElementById("livrason1");
                            var tdL0 = document.getElementById("livrason0");
                            var total = document.getElementById("total");
                            var discount = "<?php Print(Session::get('discount')); ?>";
                            function ChoseLivraison()
                            {
                                    trL.style.display = "table-row";
                                    tdL1.style.display = "table-cell";
                                    tdL0.style.display = "none";

                                    total.value = Number(total.value) + 15;
                                    total.value = (total.value) - (total.value)*discount/100;

                                    document.getElementById("adresse").removeAttribute("disabled");
                                    document.getElementById("adresse").innerHTML = "";
                                    document.getElementById("adresseHidden").innerHTML = "";


                            }
                            function UnchoseLivraison()
                                {
                                    trL.style.display = "none";
                                    tdL1.style.display = "none";
                                    tdL0.style.display = "table-cell";

                                    total.value = (total.value) - (total.value)*discount/100;


                                    document.getElementById("adresse").innerHTML = "Retirer sur place";
                                    document.getElementById("adresse").setAttribute("disabled", true);
                                    document.getElementById("adresseHidden").innerHTML = "Retirer sur place";

                                }
                            if (discount > 0)
                            {
                                trD.style.display = "table-row";
                            }
                                console.log(MyJSStringVar);
                        </script>



                        <div class=" sous-resume p-2">
                            <div class="mt-3">

                                    <div class="paymenticons">
                                        <input type="radio" name="Pmethod" value="espece"><span>Paiement en espèce</span> <br>
                                        <svg style="margin-left: 10px" id='Cash_in_Hand_24' width='35' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24'  stroke='none' fill='#000000' opacity='0'/>


                                            <g transform="matrix(0.4 0 0 0.4 12 12)" >
                                            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #000000; fill-rule: nonzero; opacity: 1;" transform=" translate(-25.02, -25.53)" d="M 34.21875 2.125 L 33.65625 2.9375 L 24.75 15.84375 L 17.03125 18.125 C 16.007813 18.433594 15.140625 19.101563 14.5625 20 L 8.15625 29.90625 L 12.21875 43.6875 L 19.625 42.0625 C 19.8125 42.023438 20 41.957031 20.1875 41.90625 C 22 41.296875 23.585938 40.199219 24.78125 38.6875 L 25.71875 37.34375 L 29.96875 40.3125 L 30.78125 40.875 L 31.375 40.03125 L 49.4375 13.84375 L 50.03125 13.03125 L 49.1875 12.46875 L 35.0625 2.6875 Z M 34.75 4.90625 L 47.25 13.5625 L 40.21875 23.75 C 41.074219 20.855469 39.707031 17.355469 36.6875 15.28125 C 34.957031 14.09375 32.945313 13.539063 31 13.71875 C 29.851563 13.824219 28.816406 14.179688 27.9375 14.75 Z M 38.90625 10.875 C 38.371094 10.871094 37.855469 11.117188 37.53125 11.59375 C 37.011719 12.351563 37.207031 13.414063 37.96875 13.9375 C 38.730469 14.460938 39.761719 14.257813 40.28125 13.5 C 40.800781 12.742188 40.605469 11.710938 39.84375 11.1875 C 39.558594 10.992188 39.226563 10.878906 38.90625 10.875 Z M 25.375 18.46875 C 25.082031 19.859375 25.269531 21.386719 25.90625 22.8125 L 26.6875 22.125 C 27.597656 21.382813 28.761719 21 29.9375 21 C 31.261719 21 32.511719 21.488281 33.46875 22.40625 C 35.03125 23.902344 35.449219 26.15625 34.65625 28.0625 C 35.972656 27.949219 37.15625 27.488281 38.125 26.75 L 30.28125 38.09375 L 26.875 35.75 L 32.375 28.03125 C 33.367188 26.769531 33.25 24.953125 32.09375 23.84375 C 30.957031 22.753906 29.1875 22.691406 27.96875 23.6875 L 22.3125 28.40625 L 19.96875 27 Z M 6.09375 30.03125 L 0 31.90625 L 5.03125 48.9375 L 11.15625 47.0625 Z" stroke-linecap="round" />
                                            </g>
                                            </svg>
                                    </div>


                                    <div class="paymenticons">
                                        <input type="radio" name="Pmethod" value="CMI"><span>Paiement par carte bancaire</span> <br>
                                    <img src="clientpage/images/payment/cards.png" alt="" width="100px">
                                    </div>

                                    <div class="paymenticons">
                                        <input type="radio" name="Pmethod" value="PayPal"><span>Paiement par PayPal</span>
                                    <img src="clientpage/images/payment/paypalcards.jpg" alt="" width="120px">
                                    </div>




                                    <input type="hidden" value="{{ session('oid') }}" name="oid">
                                </div>

                            <p style="font-size: 0.75em" class="my-3">
                                Vos données personnelles seront utilisées pour le traitement de votre commande,
                                vous accompagner au cours de votre visite du site web, et pour d’autres raisons décrites dans notre
                                <a href="{{ route('politique') }}" style="font-size: 1em; font-weight:bold; color:black" class="politique">politique de confidentialité.</a>
                            </p>
                        </div>

                    <div class="valret mt-4">
                        <div class="ret">
                            <a href="ApparetementIndex" class="btn btn-link text-muted ContinueSH">
                                <i class="mdi mdi-arrow-left me-1"></i> Retour  </a>
                        </div>
                        <div >
                            <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                Valider
                            </button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- end row -->

</div>







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
                    <p>Votre commande est retenue</p>
                    <a class="btn btn-outline-success" href="{{ route('clientIndex.index') }}">Fermer</a>
                    {{-- <button class="btn btn-outline-success">Accueil</button> --}}
                </div>
            </div>

        </div>
    </div>
  </div>







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
