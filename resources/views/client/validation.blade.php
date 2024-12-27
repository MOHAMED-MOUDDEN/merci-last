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
        <div class="card checkout-order-summary">
            <div class="card-body">
                <div class="p-3 bg-light mb-3">
                    <h5 class="promotext" style="text-align: center;" class=" mb-0">Avez-vous un code promo? <a id="promo" onclick="event.preventDefault(); return false;" style="color: #cf2227; " href=""><span class="promocode" >Cliquez ici pour saisir votre code</span></a></h5>
                </div>
                <form action="{{ secure_url(route('coupon.add')) }}">
                    <div class="py-3 bg-light mb-3 cardcoupon" id="coupon" style="display: none">
                        <input type="text" class="form-control" name="code" placeholder="Saisir le code promo">
                            <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4" style="    margin: 20px auto 0;">
                                Valider
                            </button>
                    </div>
                    <span class="right"></span>
                    <span class="left"></span>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
    document.getElementById("promo").addEventListener("click", afficheCodePromo);
        function afficheCodePromo() {
    var x = document.getElementById("coupon");
    if (x.style.display === "none") {
        x.style.display = "block";

    } else {
        x.style.display = "none";

    }
}
    </script>
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

                                                    <li>Merci de remplire tous les champs indiqué par *</li>

                                                </ul>
                                            </div>
                                        @endif


                                        <form action="{{ secure_url(route('checkout.store') )}}" method="post" id="form">
                                        @csrf
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-4 mod-4c">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-name">Nom <span style="color: #cf2227">*</span></label>
                                                            <input type="text" class="form-control" name="nom" placeholder="Enter name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-email-address">Email Address <span style="color: #cf2227">*</span></label>
                                                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mod-4c">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-name">Prenom <span style="color: #cf2227">*</span></label>
                                                            <input type="text" class="form-control" name="prenom" placeholder="Enter name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-phone">Phone <span style="color: #cf2227">*</span></label>
                                                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone no.">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="billing-address">Address <span style="color: #cf2227">*</span></label>

                                                    <textarea class="form-control" name="adresse" rows="3" placeholder="Enter full address" id="adresseHidden" hidden></textarea>
                                                    <textarea class="form-control" name="adresse" rows="3" placeholder="Enter full address" id="adresse"></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="billing-address">Notes de commande (facultatif)</label>
                                                    <textarea class="form-control" name="notes" rows="3" placeholder="Commentaires concernant votre commande, ex: consignes de livraison, les supplements..."></textarea>
                                                </div>



                                            </div>

                                            @php
                                                $n = 1;
                                            @endphp
                                            <textarea name="commande" id="" cols="30" rows="10" hidden>
                                            @foreach ($cartItems as $cartItem)
                                                Article {{$n}}: {{$cartItem->name}} ({{$cartItem->price}} DH x {{$cartItem->qty}}) |
                                            @php
                                                $n++;
                                            @endphp
                                            @endforeach
                                            </textarea>






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
                                <svg id='Delivery_Scooter_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/>


                                    <g transform="matrix(0.71 0 0 0.71 12 12)" >
                                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" translate(-15, -14.5)" d="M 20.5 3 C 19.85 3 19.299844 3.42 19.089844 4 L 16 4 C 15.45 3.99 14.990234 4.4302344 14.990234 4.9902344 C 14.980234 5.5402344 15.420703 5.99 15.970703 6 L 19.429688 6 C 20.019687 7.39 21 9.99 21 12 C 21 16 18 18 16 18 L 14 18 C 12.9 18 12 17.1 12 16 L 12 14 L 4 14 C 4 14 1 15 1 18 C 1.36 18.12 2.310625 18.52 3.390625 19 C 2.550625 19.74 2 20.8 2 22 C 2 24.2 3.8 26 6 26 C 8.2 26 10 24.2 10 22 C 10 21.98 9.9902344 21.969219 9.9902344 21.949219 C 10.140234 21.979219 10.289453 22 10.439453 22 L 17.759766 22 C 18.549766 22 19.320859 21.679141 19.880859 21.119141 L 20 21 L 20.140625 21 C 20.060625 21.32 20 21.65 20 22 C 20 24.2 21.8 26 24 26 C 26.2 26 28 24.2 28 22 C 28 21.52 27.900234 21.060859 27.740234 20.630859 L 29 20 C 29 20 27.610469 17.149531 24.730469 16.269531 L 25 16 C 24.94 12.29 22.829922 7.93 21.669922 6 L 23 6 L 23 3 L 20.5 3 z M 4.8007812 3.9003906 C 3.8107813 3.9003906 3 4.7092187 3 5.6992188 L 3 10.199219 C 3 11.189219 3.8107813 12 4.8007812 12 L 10.199219 12 C 11.189219 12 12 11.189219 12 10.199219 L 12 5.6992188 C 12 4.7092187 11.189219 3.9003906 10.199219 3.9003906 L 8 3.9003906 L 8 9 C 8 9.55 7.55 10 7 10 C 6.45 10 6 9.55 6 9 L 6 3.9003906 L 4.8007812 3.9003906 z M 5.6894531 20.029297 C 6.4994531 20.399297 7.0292187 20.639219 7.6992188 20.949219 C 7.8892187 21.249219 8 21.61 8 22 C 8 23.12 7.12 24 6 24 C 4.88 24 4 23.12 4 22 C 4 20.99 4.7294531 20.179297 5.6894531 20.029297 z M 22.269531 21 L 25.730469 21 C 25.900469 21.29 26 21.63 26 22 C 26 23.12 25.12 24 24 24 C 22.88 24 22 23.12 22 22 C 22 21.63 22.099531 21.29 22.269531 21 z" stroke-linecap="round" />
                                    </g>
                                    </svg>
                            </div>
                        </div>
                        <div class="ml-2">
                             <h5 class="font-size-16 mb-0" style="padding-left:0;">Mode de livraison <span class="float-end ms-2"></span></h5>
                            <p>
                                Choisir votre mode de paiement
                            </p>
                        </div>

                    </div>

                        <div class="Mlivraison">
                            <div>
                                <input type="radio" name="Mlivraison" id="" onclick="UnchoseLivraison()" value="Retirer sur place"> <span>Retirer sur place</span>
                            </div>
                            <div class="LD">
                                <input type="radio" name="Mlivraison" id="" onclick="ChoseLivraison()" value="Livraison à domicile"> <span>Livraison à domicile (+15 DH)</span>
                            </div>

                        </div>

                </div>
            </div>

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
                        <table class="table table-centered mb-0 table-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0" style="width: 33%; text-align: center;" scope="col" colspan="2">Produit</th>
                                    <th class="border-top-0" style="width: 33%; text-align: center;" scope="col">Prix</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($cartItems) > 0)


                                @php
                                $total = 0;
                                @endphp


                                @foreach ($cartItems as $cartItem)
                                        @php
                                            $total += $cartItem->price * $cartItem->qty;
                                        @endphp
                                        <tr>
                                        <th scope="row"><img src="{{$cartItem->model->image}}" alt="product-img" title="product-img" class="avatar-lg rounded"></th>
                                        <td>
                                            <h5 class="font-size-16 text-truncate" style="white-space: wrap;">{{$cartItem->name}}</h5>
                                            <p class="text-muted mb-0 mt-1">{{$cartItem->price}} DH x {{$cartItem->qty}}</p>
                                        </td>
                                        <td style="white-space: nowrap; text-align: center;">{{ $cartItem->price * $cartItem->qty }} DH</td>
                                    </tr>
                                    @endforeach




                                <tr class="bg-light">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Subtotal:</h5>
                                    </td>
                                    <td style="white-space: nowrap;">
                                        {{$total}} DH
                                    </td>
                                </tr>
                                <tr class="bg-light" id="trLivraison" style="display: none">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Livraison:</h5>
                                    </td>
                                    <td style="white-space: nowrap;">
                                        +15 DH
                                    </td>
                                </tr>
                                <tr class="bg-light" id="trdiscount" style="display: none">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Réduction:</h5>
                                    </td>
                                    <td>
                                        -{{Session::get('discount')}}%
                                    </td>
                                </tr>
                                <tr class="bg-light">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Total:</h5>
                                    </td>
                                    <td id="livrason1" style="display: none; white-space: nowrap;">
                                        {{($total + 15) - ($total + 15)*Session::get('discount')/100}} DH
                                    </td>
                                    <td id="livrason0" style="white-space: nowrap;">
                                        {{$total - $total*Session::get('discount')/100}} DH
                                    </td>
                                </tr>
                                <input type="hidden" value="{{$total}}" name="prix" id="total">

                                @else
                                <tr class="bg-light">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Total:</h5>
                                    </td>
                                    <td style="white-space: nowrap;">
                                        0 DH
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>


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
                            <a href="clientMenu" class="btn btn-link text-muted ContinueSH">
                                <i class="mdi mdi-arrow-left me-1"></i> Retour au menu </a>
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
@if ($msg = Session::get('thanks'))


    @php
         echo '<script type="text/javascript">
            $(document).ready(function(){
                $("#exampleModalCenter").modal("show");
            });
        </script>';
    @endphp

@endif


@endsection
