<base href="/public">

{{-- <style>
    button {
    border: none;
}

button:focus {
    border: none;
    outline: none;
}

button:focus{
    outline:none !important;
}
</style> --}}
<nav style="position: fixed">
    
    <button  type="button"
        data-toggle="offcanvas" onclick="openNav()" class="btn">
        <i class="fas fa-bars" style="font-size:25px; color:#d0d7ff;"></i>
    </button>
    {{-- <input id='bold' type='button' ><i class="fas fa-bars"></i> --}}
    
</nav>
{{-- <nav class="navbar p-0 fixed-top d-flex flex-row"> --}}
    {{-- <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                alt="logo" /></a>
        
    </div> --}}
    {{-- <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch"> --}}
        {{-- <h4>Admin Asebbane Restaurant</h4> --}}
        {{-- <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
                <h4>Admin Asebbane Restaurant</h4>
            </li>
        </ul> --}}
        {{-- <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" data-toggle="dropdown">
                    <div class="navbar-profile">
                        <img class="img-xs rounded-circle" src="{{ $profile->image }}" alt="">
                    </div>
                </a>

            </li>
            <li>
                <div>

                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul> --}}
        {{-- <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center btn-show-sidebar" type="button"
            data-toggle="offcanvas" onclick="OpenOrClose()">
            <span class="mdi mdi-format-line-spacing"></span>
        </button> --}}
    {{-- </div> --}}



    
        {{-- <div>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                alt="logo" /></a>
            <h4>Admin Asebbane Restaurant</h4>
        </div>
        <div>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center btn-show-sidebar" type="button"
            data-toggle="offcanvas" onclick="OpenOrClose()">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
        </div>
        
    
</nav>



<script>
    function OpenOrClose() {
      document.getElementById("sidebar").style.right = "0";
     
    }
    
    </script> --}}

    