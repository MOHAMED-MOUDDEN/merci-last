<style>
    span.barre{
    display:block;
    width:100%; /*or whatever width you want the effect of <hr>*/
    border-top: 1px solid #ccc
    }
    /* The sidebar menu */
.sidebar {
  min-height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 4; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #1c2131; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color: #ec1d25;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* The button used to open the sidebar */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

/* .openbtn:hover {
  background-color: #444;
} */

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

.sidebar .nav .nav-item .nav-link {
    color: #d0d7ff;
}
/* تصميم القائمة الفرعية */
.submenu {
    display: none; /* مخفية افتراضيًا */
    list-style-type: none; /* إزالة النقاط */
    padding-left: 20px; /* إزاحة للداخل */
}

.submenu li a {
    color: #818181;
    font-size: 18px;
    text-decoration: none;
    display: block;
    margin: 5px 0;
    transition: 0.3s;
}

.submenu li a:hover {
    color: #ec1d25;
    background-color: #121729;
    border-top-right-radius:20%;
    border-bottom-right-radius:20%;

}

</style>

<script>
    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    function openNav() {
    document.getElementById("sidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    }

    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    }
    function toggleSubmenu(submenuId) {
    var submenu = document.getElementById(submenuId);
    if (submenu.style.display === "block") {
        submenu.style.display = "none";
    } else {
        submenu.style.display = "block";
    }
}

</script>



<base href="/public">
<nav class="sidebar sidebar-offcanvas" id="sidebar">

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color: #d0d7ff">&times;</a>



    <ul class="nav">

        <li class="nav-item menu-items">
            <a class="nav-link" href="repas">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Menu</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="javascript:void(0)" onclick="toggleSubmenu('submenu1')">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Menu list</span>
            </a>
            <!-- القائمة الفرعية -->
            <ul id="submenu1" class="submenu">
                <li><a href="admin/menu/brunches">Brunches</a></li>
                <li><a href="admin/menu/supplements">Supplements</a></li>
                 <li><a href="admin/menu/petiti">Petits Déjeuners</a></li>
            </ul>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="contact">
                <span class="menu-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-rolodex" viewBox="0 0 16 16">
                        <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                        <path
                            d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z" />
                    </svg>
                    <i class="bi bi-person-rolodex"></i>
                </span>
                <span class="menu-title">contacts</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="chef">
                <span class="menu-icon">

                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">chefs</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="commande">
                <span class="menu-icon">

                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">commandes</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="reservation">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Reservation</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="appartement/admin">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Appartement</span>
            </a>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" href="photos">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Galery</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="reviews">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Reviwes</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('coupon.index') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Coupons</span>
            </a>
        </li>

        <li class="nav-item menu-items" >
            <span class="barre"></span>
            <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">



                    <form id="logout-form" action="{{ secure_url(route('logout')) }}" method="POST" class="d-none">
                        @csrf
                    </form>

                <span class="menu-icon">
                    <i class="fas fa-power-off" style="color: #fc424a;"></i>
                </span>
                <span class="menu-title">{{ __('Logout') }}</span>
            </a>
        </li>
    </ul>
</nav>

