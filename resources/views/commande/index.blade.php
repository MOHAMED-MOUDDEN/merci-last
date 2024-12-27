@extends('Admins.indexAdmin')


<style>
    td .btn {
        width: 100%
    }

</style>

@section('content')
    <div class="container">

        <br />
        <br />
        <br />
        <br />

        <section class="mb-5"
            style="background-image: url(clientpage/images/bg-title-page-01.jpg); padding: 5em 0em;">
            <h2 class="tit6 t-center" style="    font-size: 3rem;
            text-align: center;
            text-shadow: 0px 0 20px black;">
                All Commandes
            </h2>
        </section>
        <table class="table" >
            <thead>
                <tr>
                    <th scope="col" style="width: 135px">Client info </th>

                    <th scope="col" style="width:150px;">Adresse</th>
                    <th scope="col" style="width:200px">Commande</th>
                    <th scope="col" style="width:140px">Commande info</th>
                    <th scope="col" style="width:100px">Payment info</th>
                    <th scope="col" style="width:150px">Notes</th>
                    <th scope="col" style="width: 80px;"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comnds as $item)
                    <tr>
                        <td data-label="Client info" style="white-space: wrap; overflow: auto;"> <br>
                                        <b>Nom et Prenom :</b> <span style="color: #fff">{{ $item->nom }} {{ $item->prenom }}</span>
                            <br> <br> <b>Tel :</b> <span style="color: #fff">{{ $item->phone }}</span>
                            <br> <br> <b>Email :</b> <span style="color: #fff">{{ $item->email }}</span>
                        </td>

                        <td data-label="Adresse" style="white-space: wrap; overflow: auto;"><br><span style="color:#fff">{{ $item->adresse }}</span></td>
                        <td data-label="Commande" style="overflow: auto;"> <br>

                            <span style="color:#fff">
                                @php
                                $item->commande;
                                echo str_replace("|", "<br>", "$item->commande");
                                @endphp
                            </span>

                        </td>


                        <td data-label="Commande Info" style="white-space: wrap; overflow: auto;"> <br>
                            <b>Commande ID :</b> <span style="color: #fff">{{ $item->oid }}</span> <br> <br>
                            <b>Effectuée à :</b> <span style="color: #fff">{{ $item->created_at }}</span> <br> <br>
                            <b>Prix :</b> <span style="color: #fff">{{ $item->prix }} DH</span><br> <br>
                            <b>Mode de livraison :</b> <span style="color: #fff">{{ $item->Mlivraison }}</span> <br> <br>
                        </td>
                        <td data-label="Paiement Info" style="white-space: wrap; overflow: auto;"> <br>
                            <b>Méthode de paiement :</b> <span style="color: #fff">{{ $item->Pmethod }}</span> <br> <br> <br>
                            <b>état de paiement :</b> <span style="color: #fff">{{ $item->state }}</span> <br> <br>

                        </td>
                        <td data-label="Notes" style="white-space: wrap; overflow: auto; "> <br>
                            <span style="color:#fff">{{ $item->notes }}</span>


                        </td>
                        <td>
                            {{-- <a class="btn btn-primary" href="{{ route('comnd.edit', $item->id) }}"><i
                                    class="fa-solid fa-pen-to-square"></i></a> --}}

                            <form action="{{ secure_url(route('comnd.payee', $item->id)) }}" method="post">
                                <button type="submit" class="btn btn-success">Payée</button>
                                @csrf
                                @method('PATCH')
                            </form>
                            <form action="{{ secure_url(route('comnd.destroy', $item->id)) }}" method="post">
                                <button type="submit" class="btn btn-danger">delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $comnds->links() }}
        @if ($msg = Session::get('succes'))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

    </div>
@endsection
