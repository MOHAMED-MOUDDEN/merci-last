@extends('client.layout')


@section('meta')
<title>Merci Laayoune - Galerie</title>
<meta name="description" content="Découvrez l'atmosphère unique du Merci Laayoune à travers notre galerie de photos. Explorez nos espaces intérieurs
élégamment aménagés et notre terrasse en plein air. Plongez dans notre univers visuel et laissez-vous séduire par l'esthétique de notre café salon de thé.">
    <meta name="keywords" content="Galerie photos, Café Laayoune en images, Espaces intérieurs, Terrasse en plein air, Esthétique, Café salon de thé ambiance.">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Merci Laayoune - Galerie">
    <meta property="og:url" content="https://www.mercilaayoune.com/clientGalery">
    <meta property="og:site_name" content="Merci Laayoune">
@endsection

@section('content')
    <base href="/public">
    @include('client.includes.aside')
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-title-page-02.jpg);">
        <div style="    display: flex;
            flex-direction: column;
            align-items: center;">
                <h2 class="tit6 t-center">
                    Galerie

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



    <!-- Gallery -->
    {{-- <div class="section-gallery p-t-118 p-b-100">



    <div class="container">
        <div class="row">
            <div class="splide">
                <div class="splide__track">
                    <div class="splide__list">
                        @foreach ($photos as $item)

                        <div class="col-sm-4 splide__slide m-2">
                            <div class="card  text-dark">
                                <div class="">

                                        <div class="">
                                            <img style="object-fit: cover;
                                            width: 100%;
                                            height: 100%;" src={{ $item->photo }} alt="IMG-GALLERY">

                                            <div class="overlay-item-gallery trans-0-4 flex-c-m">
                                                <a class="btn-show-gallery flex-c-m fa fa-search" href={{ $item->photo }}
                                                    data-lightbox="gallery"></a>
                                            </div>
                                        </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>


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





<script src="{{ secure_asset('assets/js/jquery.js') }}"></script>

    </div>
 --}}


<div class="section-gallery p-t-118 p-b-100">
    {{-- <div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25"> --}}
    <div class="" style="    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}">
        @foreach ($photos as $item)
            <div style="width:250px" class="item-gallery isotope-item bo-rad-10 hov-img-zoom {{ $item->type }}">
                <img style="object-fit: cover;
                width: 100%;
                height: 100%;" src={{ $item->photo }} alt="IMG-GALLERY">
                <div class="overlay-item-gallery trans-0-4 flex-c-m">
                    <a class="btn-show-gallery flex-c-m fa fa-search" href={{ $item->photo }}
                        data-lightbox="gallery"></a>
                </div>
            </div>
        @endforeach
    </div>
</div>






@endsection
