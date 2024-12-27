@extends('client.layout')


@section('meta')
<title>Merci Laayoune - Menu</title>
<meta name="description" content="Merci Laayoune est un élégant café salon de thé avec une charmante terrasse 
    située au cœur de la ville de Laayoune. Notre ambiance chaleureuse et notre menu raffiné vous invitent à vous
    détendre et à savourer des moments de convivialité. Profitez de notre vaste sélection de boissons chaudes et froides, 
    de délicieuses pâtisseries fraîchement préparées et de plats légers. Que ce soit pour une pause délicieuse ou une 
    rencontre entre amis, Merci Laayoune vous accueille avec un service attentionné et un cadre accueillant.">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Merci Laayoune - Menu">
    <meta property="og:url" content="https://www.mercilaayoune.com/clientMenu">
    <meta property="og:site_name" content="Merci Laayoune">
@endsection



@section('content')
    @include('client.includes.aside')
    <base href="/public">
    <!-- Title Page -->
    @include('client.menu.menu-logo') 



<style>
        /*card menu*/
    .container-fluid{max-width: 1200px}
    .card{background: #fff;box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);border: 0;border-radius: 1rem}
    .card-img, .card .card-img-top{border-top-left-radius: calc(1rem - 1px);border-top-right-radius: calc(1rem - 1px)}
    .card h5{overflow: hidden;height: 56px;font-weight: 900;font-size: 1rem}
    .card .card-img-top{width: 100%;max-height: 180px;object-fit: contain;padding: 30px}
    .card h2{font-size: 1rem}
    .card:hover{transform: scale(1.05);box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06)}
    .label-top{position: absolute;background-color: #8bc34a;color: #fff;top: 8px;right: 8px;padding: 5px 10px 5px 10px;font-size: .7rem;font-weight: 600;border-radius: 3px;text-transform: uppercase}
    .top-right{position: absolute;top: 24px;left: 24px;width: 90px;height: 90px;border-radius: 50%;font-size: 1rem;font-weight: 900;background: #ff5722;line-height: 90px;text-align: center;color: white}
    .top-right span{display: inline-block;vertical-align: middle}
    @media (max-width: 768px){
        .card .card-img-top{
            max-height: 250px
        }
    }
    .over-bg{background: rgba(53, 53, 53, 0.85);box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);backdrop-filter: blur(0.0px);-webkit-backdrop-filter: blur(0.0px);border-radius: 10px}
    .btn{font-size: 1rem;font-weight: 500;text-transform: uppercase;padding: 5px 50px 5px 50px}
    .box .btn{font-size: 1.5rem}
    @media (max-width: 1025px){
        .btn{padding: 5px 40px 5px 40px}}
    @media (max-width: 250px){
        .btn{padding: 5px 30px 5px 30px}}
    .btn-warning{background: none #f7810a;color: #ffffff;fill: #ffffff;border: none;text-decoration: none;outline: 0;box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25);border-radius: 100px}
    .btn-warning:hover{background: none #ff962b;color: #ffffff;box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35)}
    .bg-success{font-size: 1rem;background-color: #f7810a !important}
    .bg-danger{font-size: 1rem}
    .price-hp{font-size: 1rem;font-weight: 600;color: darkgray}
    .amz-hp{font-size: .7rem;font-weight: 600;color: darkgray}
    .fa-question-circle:before{color: darkgray}
    .fa-plus:before{color: darkgray}
    .box{border-radius: 1rem;background: #fff;box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12)}
    .box-img{max-width: 300px}
    .thumb-sec{max-width: 300px}
    @media (max-width: 576px){
        .box-img{max-width: 200px}
        .thumb-sec{max-width: 200px}
    }
    .inner-gallery{width: 60px;height: 60px;border: 1px solid #ddd;border-radius: 3px;margin: 1px;display: inline-block;overflow: hidden;-o-object-fit: cover;object-fit: cover}
    @media (max-width: 370px){
        .box .btn{padding: 5px 40px 5px 40px;font-size: 1rem}}
    .disclaimer{font-size: .9rem;color: darkgray}
    .related h3{font-weight: 900}
    /* footer{background: #212529;height: 80px;color: #fff} */


    
    @media (min-width: 576px) {
    .col {
        flex: 0 0 auto;
        width: 50%;
    }
}

@media (min-width: 992px){
    .col {
        flex: 0 0 auto;
        width: 33.33%;
    }
}
    
    main {
        margin-bottom: 150px;
    }

</style>

    <!-- Main menu -->

   
    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    


<div style="position: relative;" class="navbarMenu">

    
   


    

    <section class="section-mainmenu p-b-70 bg1-pattern">
        <nav style=" width: 50%; margin: 0 auto 30px; padding-top: 30px; padding-bottom: 30px;" class="navMenu">
            <ul class="main_menu" style="white-space: nowrap;">

                <li>
                    <a href={{ route('standard-drinks') }} style="color: #ec1d25; font-weight:900">S-drinks</a>
                </li>

                <li>
                    <a href={{ route('Gdrinks') }}>G-drinks</a>
                </li>
    
                <li>
                    <a href={{ route('sandwich') }}>Sandwich</a>
                </li>
    
                <li>
                    <a href={{ route('sucre') }}>Sucré</a>
                </li>
    
                <li>
                    <a href={{ route('sale') }}>Salé</a>
                </li>
    
                <li>
                    <a href={{ route('Dessert') }}>Dessert</a>
                </li>
                
                <li>
                    <a href={{ route('Alacarte') }}>à la carte</a>
                </li>

        </nav>
        <div class="dropdown" style="width: 50%; margin: auto; padding-top: 50px; padding-bottom: 50px;">
            <button style="left: 50%; transform: translate(-50%, -50%); position: absolute;" class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Catégories
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href={{ route('standard-drinks') }}>S-drinks</a></li>
                <li><a class="dropdown-item" href={{ route('Gdrinks') }}>G-drinks</a></li>
                <li><a class="dropdown-item" href={{ route('sandwich') }}>Sandwich</a></li>
                <li><a class="dropdown-item" href={{ route('sucre') }}>Sucre</a></li>
                <li><a class="dropdown-item" href={{ route('sale') }}>Salé</a></li>
                <li><a class="dropdown-item" href={{ route('Dessert') }}>Dessert</a></li>
                <li><a class="dropdown-item" href={{ route('Alacarte') }}>à la carte</a></li>
              </ul>
    </div>
        <div class="container">
            
        

            
            <h3 class="tit-mainmenu tit10 " style="color:brown">
                Espresso
            </h3>
            <div class="line-item-mainmenu bg3-pattern" ></div>
           
            <main> 
                
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;"> 
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
                        
                        @foreach ($Espresso as $item)
                            <div class="col"> 
                                <div class="card h-100 shadow-sm"> 
                                    <img src="{{$item->image}}" class="card-img-top" alt="..."> 
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
                                        <p class="card-title">
                                            {{ $item->description }}
                                        </p> 
                                        <div class="text-center my-4">
                                            <a href="{{ route('cart.show', $item->id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4" style="left: 50%;transform: translate(-50%, -50%); position: absolute;"
                                        >commander</a> 
                                        </div>
                                    </div> 
                                </div> 
                            </div>  
                        @endforeach       
                    </div> 
                </div> 
            </main>
            

            <h3 class="tit-mainmenu tit10 " style="color:brown">
                Thé
            </h3>
            <div class="line-item-mainmenu bg3-pattern" ></div>
           
            <main> 
                
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;"> 
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
                        
                        @foreach ($Thé as $item)
                            <div class="col"> 
                                <div class="card h-100 shadow-sm"> 
                                    <img src="{{$item->image}}" class="card-img-top" alt="..."> 
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
                                        <p class="card-title">
                                            {{ $item->description }}
                                        </p> 
                                        <div class="text-center my-4"> 
                                            <a href="{{ route('cart.show', $item->id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4" style="left: 50%;transform: translate(-50%, -50%); position: absolute;"
                                        >commander</a> 
                                        </div>
                                    </div> 
                                </div> 
                            </div>  
                        @endforeach       
                    </div> 
                </div> 
            </main>
            


            <h3 class="tit-mainmenu tit10 " style="color:brown">
                Frappuccino
            </h3>
            <div class="line-item-mainmenu bg3-pattern" ></div>
          
            <main> 
                
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;"> 
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
                        
                        @foreach ($Frappuccino as $item)
                            <div class="col"> 
                                <div class="card h-100 shadow-sm"> 
                                    <img src="{{$item->image}}" class="card-img-top" alt="..."> 
                                    <div class="card-body"> 
                                        <div class="clearfix mb-3"> 
                                            <div class="flex-w flex-b m-b-3">
                                            
                                                <span class="float-start" >
                                
                                                    {{ $item->nom }}
                                                </span>
                                
                                                <div class="line-item-mainmenu bg3-pattern"></div>
                                
                                                <div class="float-end price-hp" style="font-size: 1.25em;">
                                                    {{ $item->prix }}DH
                                                </div>
                                            </div> 
                                        </div> 
                                        <p class="card-title">
                                            {{ $item->description }}
                                        </p> 
                                        <div class="text-center my-4"> 
                                            <a href="{{ route('cart.show', $item->id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4" style="left: 50%;transform: translate(-50%, -50%); position: absolute;"
                                        >commander</a> 
                                        </div>
                                    </div> 
                                </div> 
                            </div>  
                        @endforeach       
                    </div> 
                </div> 
            </main>


            <h3 class="tit-mainmenu tit10 " style="color:brown">
                Cappuccino
            </h3>
            <div class="line-item-mainmenu bg3-pattern" ></div>
      
            <main> 
                
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;"> 
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
                        
                        @foreach ($Cappuccino as $item)
                            <div class="col"> 
                                <div class="card h-100 shadow-sm"> 
                                    <img src="{{$item->image}}" class="card-img-top" alt="..."> 
                                    <div class="card-body"> 
                                        <div class="clearfix mb-3"> 
                                            <div class="flex-w flex-b m-b-3">
                                            
                                                <span class="float-start" >
                                
                                                    {{ $item->nom }}
                                                </span>
                                
                                                <div class="line-item-mainmenu bg3-pattern"></div>
                                
                                                <div class="float-end price-hp" style="font-size: 1.25em;">
                                                    {{ $item->prix }}DH
                                                </div>
                                            </div> 
                                        </div> 
                                        <p class="card-title">
                                            {{ $item->description }}
                                        </p> 
                                        <div class="text-center my-4"> 
                                            <a href="{{ route('cart.show', $item->id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4" style="left: 50%;transform: translate(-50%, -50%); position: absolute;"
                                        >commander</a> 
                                        </div>
                                    </div> 
                                </div> 
                            </div>  
                        @endforeach       
                    </div> 
                </div> 
            </main>


            <h3 class="tit-mainmenu tit10 " style="color:brown">
                Café crème
            </h3>
            <div class="line-item-mainmenu bg3-pattern" ></div>

            <main> 
                
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;"> 
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
                        
                        @foreach ($Café_crème as $item)
                            <div class="col"> 
                                <div class="card h-100 shadow-sm"> 
                                    <img src="{{$item->image}}" class="card-img-top" alt="..."> 
                                    <div class="card-body"> 
                                        <div class="clearfix mb-3"> 
                                            <div class="flex-w flex-b m-b-3">
                                            
                                                <span class="float-start" >
                                
                                                    {{ $item->nom }}
                                                </span>
                                
                                                <div class="line-item-mainmenu bg3-pattern"></div>
                                
                                                <div class="float-end price-hp" style="font-size: 1.25em;">
                                                    {{ $item->prix }}DH
                                                </div>
                                            </div>
                                        </div> 
                                        <p class="card-title">
                                            {{ $item->description }}
                                        </p> 
                                        <div class="text-center my-4"> 
                                            <a href="{{ route('cart.show', $item->id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4" style="left: 50%;transform: translate(-50%, -50%); position: absolute;"
                                        >commander</a> 
                                        </div>
                                    </div> 
                                </div> 
                            </div>  
                        @endforeach       
                    </div> 
                </div> 
            </main>


            <h3 class="tit-mainmenu tit10 " style="color:brown">
                Ice tea
            </h3>
            <div class="line-item-mainmenu bg3-pattern" ></div>
     
            <main> 
                
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;"> 
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
                        
                        @foreach ($Ice_tea as $item)
                            <div class="col"> 
                                <div class="card h-100 shadow-sm"> 
                                    <img src="{{$item->image}}" class="card-img-top" alt="..."> 
                                    <div class="card-body"> 
                                        <div class="clearfix mb-3"> 
                                            <div class="flex-w flex-b m-b-3">
                                            
                                                <span class="float-start" >
                                
                                                    {{ $item->nom }}
                                                </span>
                                
                                                <div class="line-item-mainmenu bg3-pattern"></div>
                                
                                                <div class="float-end price-hp" style="font-size: 1.25em;">
                                                    {{ $item->prix }}DH
                                                </div>
                                            </div>
                                        </div> 
                                        <p class="card-title">
                                            {{ $item->description }}
                                        </p> 
                                        <div class="text-center my-4"> 
                                            <a href="{{ route('cart.show', $item->id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4" style="left: 50%;transform: translate(-50%, -50%); position: absolute;"
                                        >commander</a> 
                                        </div>
                                    </div> 
                                </div> 
                            </div>  
                        @endforeach       
                    </div> 
                </div> 
            </main>


            <h3 class="tit-mainmenu tit10 " style="color:brown">
                Ice Coffee
            </h3>
            <div class="line-item-mainmenu bg3-pattern" ></div>
         
            <main> 
                
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;"> 
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
                        
                        @foreach ($Ice_Coffée as $item)
                            <div class="col"> 
                                <div class="card h-100 shadow-sm"> 
                                    <img src="{{$item->image}}" class="card-img-top" alt="..."> 
                                    <div class="card-body"> 
                                        <div class="clearfix mb-3"> 
                                            <div class="flex-w flex-b m-b-3">
                                            
                                                <span class="float-start" >
                                
                                                    {{ $item->nom }}
                                                </span>
                                
                                                <div class="line-item-mainmenu bg3-pattern"></div>
                                
                                                <div class="float-end price-hp" style="font-size: 1.25em;">
                                                    {{ $item->prix }}DH
                                                </div>
                                            </div> 
                                        </div> 
                                        <p class="card-title">
                                            {{ $item->description }}
                                        </p> 
                                        <div class="text-center my-4"> 
                                            <a href="{{ route('cart.show', $item->id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4" style="left: 50%;transform: translate(-50%, -50%); position: absolute;"
                                        >commander</a> 
                                        </div>
                                    </div> 
                                </div> 
                            </div>  
                        @endforeach       
                    </div> 
                </div> 
            </main>

            <h3 class="tit-mainmenu tit10 " style="color:brown">
                Fondue Au Chocolat
            </h3>
            <div class="line-item-mainmenu bg3-pattern" ></div>
            
            <main> 
                
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;"> 
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
                        
                        @foreach ($Fondue_Au_Chocolat as $item)
                            <div class="col"> 
                                <div class="card h-100 shadow-sm"> 
                                    <img src="{{$item->image}}" class="card-img-top" alt="..."> 
                                    <div class="card-body"> 
                                        <div class="clearfix mb-3"> 
                                            <div class="flex-w flex-b m-b-3">
                                            
                                                <span class="float-start" >
                                
                                                    {{ $item->nom }}
                                                </span>
                                
                                                <div class="line-item-mainmenu bg3-pattern"></div>
                                
                                                <div class="float-end price-hp" style="font-size: 1.25em;">
                                                    {{ $item->prix }}DH
                                                </div>
                                            </div> 
                                        </div> 
                                        <p class="card-title">
                                            {{ $item->description }}
                                        </p> 
                                        <div class="text-center my-4"> 
                                            <a href="{{ route('cart.show', $item->id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4" style="left: 50%;transform: translate(-50%, -50%); position: absolute;"
                                        >commander</a> 
                                        </div>
                                    </div> 
                                </div> 
                            </div>  
                        @endforeach       
                    </div> 
                </div> 
            </main>

        </div>
    </section>
</div>
    


@include('client.menu.brunch_pdej')  


    
@endsection