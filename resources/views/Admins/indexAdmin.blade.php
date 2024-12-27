<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Asebbane Restaurant Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- End layout styles -->

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


<style>
    table {
    border: 1px solid #ccc;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
    width: 100%;
    table-layout: fixed;
    /* box-shadow: 1px 1px 20px 0px #999; */
    
  }
  
  table caption {
    font-size: 1.5em;
    margin: .5em 0 .75em;
  }
  
  table tr{
    background-color: #222222;
    /* background-color: transparent; */
    border: 1px solid #ddd;
    padding: .35em;
    
  }
  tbody tr{
    /* height: 130px; */
    
  }
  
  table th ,
  table td{
    padding: .625em;
    text-align: center;
    color: #d0d7ff;
    /* white-space: wrap !important; */
  }
  
  table th{
    font-size: .85em;
    letter-spacing: .1em;
    text-transform: uppercase;
  }
  
  .table thead th {
    color: #d0d7ff;

  }
  div.increment {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: center;
}


  /* @media screen and (max-width: 600px) { */
  @media screen and (max-width: 992px) {
    table{
      border: 0;
      
    }
  
    table caption {
      font-size: 1.3em;
    }
    
    table thead{
      border: none;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }
    
    table tr{
      border-bottom: 3px solid #ddd;
      display: block;
      margin-bottom: .625em;
    }
    
    table td{
      border-bottom: 1px solid #ddd;
      display: block;
      font-size: .8em;
      text-align: right;
      
    }
    
    table td::before {
      /*
      * aria-label has no advantage, it won't be read inside a table
      content: attr(aria-label);
      */
      content: attr(data-label);
      float: left;
      font-weight: bold;
      text-transform: uppercase;
    }
    
    table td:last-child {
      border-bottom: 0;
    }

    div.increment {
        justify-content: flex-end;
    }
    div.increment .number-input {
        margin-right: 20px;
    }
  }
  
  
  
  
table .btn{
    padding: 0.5rem;

}
  
  
  
@media (max-width: 1083px) {
    div.increment .number-input {
        margin-bottom: 5px;
    }
}
@media (min-width: 1083px) {
    div.increment .number-input {
        margin-right: 5px;
    }
}
  
body {
  background-color: #20283E;
  background-image: radial-gradient(#000000 0.5px, #20283E 0.5px);
  background-size: 10px 10px;
}



.form-control {
            /* background-color: white; */
            border-radius: 10px;
            /* border: 2px solid #d9d9d9; */
            
        }
        .form-control:focus {
        /* background-color: rgb(255, 255, 255); */
        /* border-color: #ec1d25; */
        border: 2px solid #ec1d25;
        color: #aaa;
    }


    option:checked, option:hover {
        background-color: #d9d9d9;
        }
        
    .select-dropdown,
    .select-dropdown * {
        margin: 0;
        padding: 0;
        position: relative;
        box-sizing: border-box;
    }
    .select-dropdown {
        position: relative;
        background-color: #2A3038;
        /* border: 2px solid #d9d9d9; */
        border-radius: 10px
    }
    .select-dropdown select {
        font-size: 1rem;
        font-weight: normal;
        width: 100%;
        padding: 8px 24px 8px 10px;
        border: none;
        background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
        appearance: none;
        color: #6C7293;

    }
    .select-dropdown select:active, .select-dropdown select:focus {
        outline: none;
        box-shadow: none;
    }
    .select-dropdown:after {
        content: "";
        position: absolute;
        top: 50%;
        right: 8px;
        width: 0;
        height: 0;
        margin-top: -2px;
        border-top: 5px solid #aaa;
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
    }
    input[type="file"]::file-selector-button {
        border-radius: 4px;
        padding: 0 16px;
        height: 40px;
        cursor: pointer;
        background-color: white;
        border: 2px solid #d9d9d9;
        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
        margin-right: 16px;
        transition: background-color 200ms;
    }

    /* file upload button hover state */
    input[type="file"]::file-selector-button:hover {
    background-color: #f3f4f6;
    }

    /* file upload button active state */
    input[type="file"]::file-selector-button:active {
        background-color: #e5e7eb;
    }

    label  {
        color: #ffffff;
        font-family: Montserrat;
        font-weight: 600;
        font-size: 15px;
    }
    .envoyer {
        border-radius: 4px;
        padding: 0 16px;
        height: 40px;
        cursor: pointer;
        background-color: white;
        border: 2px solid #d9d9d9;
        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
        margin-right: 16px;
        transition: background-color 200ms;
    }

    /* file upload button hover state */
    .envoyer:hover {
    background-color: #f3f4f6;
    }

    /* file upload button active state */
    .envoyer:active {
        background-color: #e5e7eb;
    }

    label  {
        color: #ffffff;
        font-family: Montserrat;
        font-weight: 600;
        font-size: 15px;
    }
</style>





<body>
    <div class="container-scroller">
        @include('Admins.partiels.header')
        <!-- partial:partials/_sidebar.html -->
        @include('Admins.partiels.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="width: 100%;">
            <!-- partial:partials/_navbar.html -->
            {{-- @include('Admins.partiels.header') --}}
            {{-- <!-- partial --> --}}
            @yield('content')
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('Admins.partiels.footer')

</body>

</html>
