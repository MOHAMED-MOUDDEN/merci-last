 <!-- Lunch -->
 <section class="section-lunch bgwhite">
    <div class="header-lunch parallax0 parallax100"
        style="background-image: url(clientpage/images/header-menu-01.jpg);">
        <div class="bg1-overlay t-center p-t-50 p-b-50">
            <h2 class="tit4 t-center">
                Petits Déjeuners
            </h2>
            <div style="    display: flex;
            flex-direction: column;
            align-items: center;">
                <div class="mb-4" >
                    {{-- Merci Laayoune --}}
                    <img class="mercilogo-autre"  src="clientpage/images/MERCI_IMG/LOGO/Logo-Merci-b1.png" alt="" style="width: 300px" >
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
    </div>

    <div class="container">
        <div class="row p-t-108 p-b-70">

                @foreach ($Petits_Déjeuners as $item)
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

                                <div style="    display: flex;
                                align-items: center;
                                justify-content: space-between;
                                width: 100%;">
                                    <span class="txt22 ">
                                        {{ $item->prix }} MAD
                                    </span>

                                        <a href="{{ route('cart.show', $item->id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4" >
                                    commander</a>

                                </div>

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
        <div class="bg1-overlay t-center p-t-50 p-b-50">
            <h2 class="tit4 t-center">
                Brunches
            </h2>
            <div style="    display: flex;
            flex-direction: column;
            align-items: center;">
                <div class="mb-4" >
                    {{-- Merci Laayoune --}}
                    <img class="mercilogo-autre"  src="clientpage/images/MERCI_IMG/LOGO/Logo-Merci-b1.png" alt="" style="width: 300px">
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
    </div>

    <div class="container">
        <div class="row p-t-108 p-b-70">

                @foreach ($Brunch as $item)
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

                                <div style="    display: flex;
                                align-items: center;
                                justify-content: space-between;
                                width: 100%;">
                                    <span class="txt22 ">
                                        {{ $item->prix }} MAD
                                    </span>

                                        <a href="{{ route('cart.show', $item->id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4" >
                                    commander</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



        </div>
    </div>

    <div class="container">
        <div class="card-body">
            <div class="p-3 bg-light mb-3">
                <h3 class="tit-mainmenu tit10 " style="color:brown">
                    Avez-vous besoin de supplements?
                </h3>
            </div>
            <div class="py-3 bg-light mb-3 cardcoupon" id="coupon" >
                <main>

                    <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
                        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">

                            @foreach ($Supplements as $item)
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{$item->image}}" class="card-img-top" alt="..." >
                                        <div class="card-body">


                                            <div class="flex-w flex-b m-b-3">

                                                <span class="float-start" >

                                                    {{ $item->nom }}
                                                </span>

                                                <div class="line-item-mainmenu bg3-pattern"></div>

                                                <div class="float-end price-hp" style="font-size: 1.25em;">
                                                    {{ $item->prix }}DH
                                                </div>
                                            </div>

                                            <div class="text-center my-4">
                                                <a href="{{ route('cart.show', $item->id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4" style="left: 50%;transform: translate(-50%, -50%); position: absolute;"
                                            >Ajouter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</section>
