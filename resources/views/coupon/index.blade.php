@extends('Admins.indexAdmin')

@section('content')


<style>
    td .btn {
        width: 250px;
    }
    .td-btn {
        /* position: absolute; */
        align-items: center;

    }
    @media screen and (max-width: 992px){
        td {
            position: relative !important;

        }
        td .btn {
        width: 100%;
    }
    .td-btn {
        /* position: absolute; */
        align-items: stretch;
    }
    }
</style>



    <div class="container">
        <br><br><br><br>
        <section class="mb-5"
            style="background-image: url(clientpage/images/bg-title-page-01.jpg); padding: 5em 0em;">
            <h2 class="tit6 t-center" style="    font-size: 3rem;
            text-align: center;
            text-shadow: 0px 0 20px black;">
                Coupons
            </h2>
        </section>
        @if ($errors->any())
            <div class="alert alert-danger">

                <ul>

                    <li>Merci de saisir un pourcentage valide</li>

                </ul>
            </div>
        @endif
        @if ($msg = Session::get('error'))
            <div class="alert alert-danger">
                <ul>

                    <li>{{ $msg }}</li>

                </ul>

            </div>
        @endif


        <button class="btn btn-primary btn-lg p-3" onclick="afficheCodePromo()" >
            ajouter Code promo
        </button>
        <form action="{{secure_url( route('coupon.create')) }}">
            <div class="py-3 mb-3 cardcoupon" id="coupon" style="display: none">

                <div>
                    <input type="radio" name="generate" id="Aradio" checked="checked"> <span> Automatique</span> <br>
                </div>
                <input type="hidden"  name="code" id="Acode">
                <div>
                    <input type="radio" name="generate" id="Mradio"> <span> Manuelle</span> <br>
                </div>


                <input type="text" class="form-control" name="code" id="Minput" placeholder="Saisir le code promo">
                <input type="text" class="form-control" name="discount" placeholder="Saisir le pourcentage">
                    <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4" style="margin: 20px auto 0;">
                        Valider
                    </button>
            </div>
            <script>
                function afficheCodePromo() {
            var x = document.getElementById("coupon");
            if (x.style.display === "none") {
                x.style.display = "block";

            } else {
                x.style.display = "none";

            }
                }

                if (document.getElementById("Mradio").checked)
                {
                    document.getElementById("Minput").removeAttribute("disabled");
                document.getElementById("Minput").focus();
                }
                else if (document.getElementById("Aradio").checked)
                {
                    document.getElementById("Minput").setAttribute("disabled", true);
                    var Acode = document.getElementById("Acode");
                    var randomstring = Math.random().toString(36).slice(-8).toUpperCase() ;
                    Acode.value = randomstring;

                }
                document.getElementById("Mradio").addEventListener("click", () => {
                document.getElementById("Minput").removeAttribute("disabled");
                document.getElementById("Minput").focus();
});
                document.getElementById("Aradio").addEventListener("click", () => {
                document.getElementById("Minput").setAttribute("disabled", true);
});
            </script>
        </form>
        <table class="table" >
            <thead>
                <tr>
                    <th scope="col">Code Promo</th>
                    <th scope="col">Réduction</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coupons as $item)
                    <tr>
                        <td style="display: flex;justify-content: center; border-top: 0px;">{{ $item->code }}</td>
                        <td style="border-top: 0px; ">{{ $item->discount }}</td>
                        <td>
                            <form action="{{secure_url( route('coupon.destroy', $item->id)) }}" method="post">
                                <button type="submit" class="btn btn-danger">delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($msg = Session::get('succes'))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

    </div>
@endsection
