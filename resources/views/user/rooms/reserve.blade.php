@extends('client.command')

@section('meta')
<title>Merci Laayoune - Commande</title>
<meta name="description" content="Préparez-vous à finaliser votre commande au Merci Laayoune. Remplissez les informations nécessaires, telles que les détails de livraison et les préférences spéciales, pour que nous puissions vous offrir un service personnalisé et répondre à vos attentes.">
<meta name="keywords" content="Validation commande, Informations de livraison, Préférences spéciales, Service personnalisé, Café Laayoune commande.">
<meta property="og:locale" content="fr_FR">
<meta property="og:type" content="website">
<meta property="og:title" content="Merci Laayoune - Commande">
<meta property="og:url" content="https://www.mercilaayoune.com/pannier">
<meta property="og:site_name" content="Merci Laayoune">
@endsection

@section('validation')
<link rel="stylesheet" type="text/css" href={{ asset('clientpage/css/validation.css') }}>

<div class="container cntnr">

    <div class="row" style="width: 100%; margin: auto;">
    @if ($msg = Session::get('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{{ $msg }}</li>
        </ul>
    </div>
    @endif
    </div>

    <div class="row">
        <div class="col-xl-8 mod-8">
            {{ Session::get('discount') }}
            <div class="card">
                <div class="card-body">
                    <div class="p-3 bg-light mb-3" style="display: flex;">
                        <div class="avatar checkout-icon p-1">
                            <div class="avatar-title rounded-circle">
                                <i class="bx bxs-receipt text-white font-size-20"></i>
                            </div>
                        </div>
                        <div class="ml-2">
                             <h5 class="font-size-16 mb-0" style="padding-left:0;">Informations de facturation <span class="float-end ms-2"></span></h5>
                            <p>
                                Saisir vos informations
                            </p>
                        </div>
                    </div>
                    <ol class="activity-checkout mb-0 px-4 mt-3">
                        <li class="checkout-item">
                            <div class="feed-item-list">
                                <div>
                                    <div class="mb-3">
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif

                                        <form action="{{ secure_url(route('reservations.store')) }}" method="POST" id="form">
                                            @csrf
                                            <div>
                                                <div class="mb-3">
                                                    <label for="nom" class="form-label">Nom <span style="color: #cf2227">*</span></label>
                                                    <input type="text" class="form-control" name="nom" value="{{ old('nom') }}" required>
                                                    @error('nom')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email <span style="color: #cf2227">*</span></label>
                                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="date" class="form-label">Date <span style="color: #cf2227">*</span></label>
                                                    <input type="date" class="form-control" name="date" value="{{ old('date') }}" required>
                                                    @error('date')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="heure" class="form-label">Heure <span style="color: #cf2227">*</span></label>
                                                    <input type="time" class="form-control" name="heure" value="{{ old('heure') }}" required>
                                                    @error('heure')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="gens" class="form-label">Nombre de Gens <span style="color: #cf2227">*</span></label>
                                                    <input type="number" class="form-control" name="gens" placeholder="Enter le nombre de personnes" value="{{ old('gens') }}" required>
                                                    @error('gens')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">Phone <span style="color: #cf2227">*</span></label>
                                                    <input type="text" class="form-control" name="phone" placeholder="Enter phone number" value="{{ old('phone') }}" required>
                                                    @error('phone')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 mod-4">
            <div class="card checkout-order-summary">
                <div class="card-body">
                    <div class="p-3 bg-light mb-3" style="display: flex;">
                        <div class="avatar checkout-icon p-1">
                            <div class="avatar-title rounded-circle">
                                <svg id='Shopping_Cart_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/>
                                    <g transform="matrix(1 0 0 1 12 12)">
                                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" translate(-11, -12)" d="M 4.4160156 1.9960938 L 1.0039062 2.0136719 L 1.0136719 4.0136719 L 3.0839844 4.0039062 L 6.3789062 11.908203 L 5.1816406 13.822266 C 4.3432852 15.161017 5.3626785 17 6.9414062 17 L 19 17 L 19 15 L 6.9414062 15 C 6.8301342 15 6.8173041 14.978071 6.8769531 14.882812 L 8.0527344 13 L 15.521484 13 C 16.247484 13 16.917531 12.605703 17.269531 11.970703 L 20.871094 5.484375 C 21.242094 4.818375 20.760047 4 19.998047 4 L 5.25 4 L 4.4160156 1.9960938 z M 7 18 C 5.8954305003384135 18 5 18.895430500338414 5 20 C 5 21.104569499661586 5.8954305003384135 22 7 22 C 8.104569499661586 22 9 21.104569499661586 9 20 C 9 18.895430500338414 8.104569499661586 18 7 18 z M 17 18 C 15.895430500338414 18 15 18.895430500338414 15 20 C 15 21.104569499661586 15.895430500338414 22 17 22 C 18.104569499661586 22 19 21.104569499661586 19 20 C 19 18.895430500338414 18.104569499661586 18 17 18 z" stroke-linecap="round"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-2">
                             <h5 class="font-size-16 mb-0" style="padding-left:0;">Commande<span class="float-end ms-2"></span></h5>
                            <p>
                                Voici les Détails de votre commande <br>
                                @if (!is_null(session('oid')))
                                ID {{ session('oid') }}
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="card-content">
                        <div>
                            <h4 class="title">Résumé Commande</h4>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Article</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Total: </td>
                                        <td class="text-end">
                                            <span class="text-danger">
                                                <i class="bx bx-euro-circle"></i> {{  $room->price }}
                                            </span>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <hr>

                        <div>
                            <button type="submit" class="btn btn-primary w-100">Confirmer la commande</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
