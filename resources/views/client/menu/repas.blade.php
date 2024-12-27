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
</section>
