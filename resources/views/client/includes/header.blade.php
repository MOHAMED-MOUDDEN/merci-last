<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="d-flex justify-content-center">
                <!-- Logo -->
                <div class="logo desk">
                    <a href={{ route('clientIndex.index') }}><img src="clientpage/images/MERCI_IMG/logo_header/Logo-Merci-b3.png" alt="" width="100px"></a>
                </div>

                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href={{ route('clientIndex.index') }}>Accueil</a>
                            </li>

                            <li>

                            </li>
                            <li class="t-center dropdown">
                                <a href="{{ route('clientMenu.index') }}"> Menu</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('client.menu.voirmenu') }}" class="dropdown-item">Voire Menu</a></li>
                                    <li><a href="{{ route('clientMenu.index') }}" class="dropdown-item">Commander</a></li>
                                </ul>
                            </li>


                            <li class="t-center dropdown">
    <a href="#" >
        Réservations
    </a>
    <ul class="dropdown-menu">
        <li><a href="{{ route('clientReservation.index') }}" class="dropdown-item">Restaurant</a></li>
        <li><a href="{{ route('Apparetementindex') }}" class="dropdown-item">Appartement</a></li>
    </ul>
</li>
<style>
.dropdown {
    position: relative;
}

.dropdown-toggle {
    cursor: pointer;
}

.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;

    min-width: 160px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 0;
    list-style-type: none;
    z-index: 1000;
}

.dropdown-item {
    padding: 10px 20px;
    color: #333;
    text-decoration: none;
    display: block;
}

.dropdown-item:hover {

    color: red; /* Change text color to red on hover */
    background-color: transparent; /* Ensure no background color on hover */
}


/* Affiche le sous-menu au survol de l'élément parent */
.dropdown:hover .dropdown-menu {
    display: block;
}

</style>


                            <li>
                                <a href={{ route('clientGalery.index') }}>Galerie</a>
                            </li>

                            <li>
                                <a href={{ route('clientAbout.index') }}>à propos</a>
                            </li>



                            <li>
                                <a href="{{ route('clientContact.index') }}">Contact</a>
                            </li>

                            <li>
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ms-auto">

                                </ul>

                            </li>
                            <li>

                                <form action="{{ secure_url(route('pannier.index')) }}">
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                            fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                            <path
                                                d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </button>

                                </form>
                                <div class="divnot">
                                    <span class="notification"></span>

                                    <a style="color: #ffffff">{{ session('ItemsCount') }}</a>
                                </div>



                            </li>

                        </ul>
                        <i data-count="2" class="fa-5x fa-border icon-grey badge"></i>

                    </nav>
                </div>


            </div>
            <div class="header-mob">
                <div>
                    <button  class="btn-show-sidebar ml-auto p-2"></button>
                </div>

                <div class="logo logo-mobile">
                    <a href={{ route('clientIndex.index') }}><img src="clientpage/images/MERCI_IMG/logo_header/Logo-Merci-b3.png" alt="" width="100px"></a>
                </div>


                <div class="pannierMob">



                    <form action="{{ secure_url(route('pannier.index')) }}">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                <path
                                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                            </svg>
                        </button>

                         <div class="divnot">
                        <span class="notification"></span>
                        <a style="color: #ffffff">{{ session('ItemsCount') }}</a>
                    </div>
                    </form>

                </div>


              </div>
        </div>
    </div>
</header>
