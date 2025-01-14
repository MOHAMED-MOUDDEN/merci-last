@extends('client.command')

@section('meta')
<title>Merci Laayoune - Réservation</title>
<meta name="description" content="Réservez facilement votre table au Merci Laayoune. Remplissez les informations nécessaires pour garantir une expérience personnalisée et agréable.">
<meta name="keywords" content="Réservation, Informations personnelles, Service personnalisé, Café Laayoune réservation.">
<meta property="og:locale" content="fr_FR">
<meta property="og:type" content="website">
<meta property="og:title" content="Merci Laayoune - Réservation">
<meta property="og:url" content="https://www.mercilaayoune.com/reservation">
<meta property="og:site_name" content="Merci Laayoune">
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href={{ asset('clientpage/css/reservation.css') }}>

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
            {{Session::get('discount')}}
            <div class="card">
                <div class="card-body">
                    <div class="p-3 bg-light mb-3" style="display: flex;">
                        <div class="avatar checkout-icon p-1">
                            <div class="avatar-title rounded-circle">
                                <i class="bx bxs-calendar text-white font-size-20"></i>
                            </div>
                        </div>
                        <div class="ml-2">
                            <h5 class="font-size-16 mb-0" style="padding-left:0;">Informations de Réservation</h5>
                            <p>Remplissez les détails pour votre réservation.</p>
                        </div>
                    </div>

                    <ol class="activity-checkout mb-0 px-4 mt-3">
                        <li class="checkout-item">
                            <div class="feed-item-list">
                                <div>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <form action="{{ route('room-reservations.store') }}" method="POST" id="form">
                                        @csrf
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
                                            <label for="gens" class="form-label">Nombre de Personnes <span style="color: #cf2227">*</span></label>
                                            <input type="number" class="form-control" name="gens" placeholder="Nombre de personnes" value="{{ old('gens') }}" required>
                                            @error('gens')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Téléphone <span style="color: #cf2227">*</span></label>
                                            <input type="text" class="form-control" name="phone" placeholder="Numéro de téléphone" value="{{ old('phone') }}" required>
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Valider la Réservation</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="col-xl-4 mod-4">
            <div class="card checkout-order-summary">
                <div class="card-body">
                    <div class="p-3 bg-light mb-3" style="display: flex;">
                        <div class="avatar checkout-icon p-1">
                            <div class="avatar-title rounded-circle">
                                <i class="bx bxs-calendar-check text-white font-size-20"></i>
                            </div>
                        </div>
                        <div class="ml-2">
                            <h5 class="font-size-16 mb-0">Résumé</h5>
                            <p>Votre réservation sera confirmée après validation.</p>
                        </div>
                    </div>

                    <div class="table-responsive">
                        @if(isset($price))
                        <input type="hidden" value="{{ $price }}" name="price" id="total">
                        <tr class="bg-light">
                            <td colspan="2">
                                <h5 class="font-size-14 m-0">Total:</h5>
                            </td>
                            <td style="white-space: nowrap;">
                                {{ $price }} MAD
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td colspan="3">Prix non défini</td>
                        </tr>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
