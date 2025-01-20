<!DOCTYPE html>
<html lang="en">
@include('client.includes.head')
@include('client.includes.header')

@yield('content')
@include('client.includes.footer')

<div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
</div>
<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('clientpage/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('clientpage/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('clientpage/vendor/bootstrap/js/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('clientpage/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('clientpage/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('clientpage/vendor/daterangepicker/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('clientpage/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('clientpage/vendor/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('clientpage/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('clientpage/vendor/parallax100/parallax100.js') }}"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        $('.parallax100').parallax100();
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('clientpage/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('clientpage/vendor/lightbox2/js/lightbox.min.js') }}"></script>
<!--===============================================================================================-->
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}"></script>
<script src="{{ asset('clientpage/js/map-custom.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('clientpage/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
</body>
</html>
