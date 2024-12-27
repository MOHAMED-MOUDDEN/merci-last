@extends('client.layout')
@section('content')
    <base href="/public">
    @include('client.includes.aside')
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-title-page-03.jpg);">
        <h2 class="tit6 t-center">
            Pannier
        </h2>
    </section>
    <br><br><br>
    <div class="container">
        <br><br><br>
        {{-- <table id="cart" class="table table-hover table-condensed">

            <thead >
                <tr>
                    <th>photo</th>
                    <th>repas</th>
                    <th>prix</th>
                    <th>quantite</th>
                    <th>subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                @endphp
                @foreach (session('ItemsCount') as $cartItem)
                @foreach ($cartItems as $cartItem)
                    @php
                        $total += $cartItem->price * $cartItem->qty;
                    @endphp
                    <tr data-id="{{ $cartItem->id }}">
                        <td><img src="{{ $cartItem->model->image }}" class="img-fluid" style="width: 150px;" alt="">
                        </td>
                        <td>{{ $cartItem->name }}</td>
                        <td>
                            {{ $cartItem->price }} DHS
                        </td>
                        <td>

                            <form action="{{ route('pannier.update', $cartItem->rowId) }}" method="post">
                                <input type="number" name='qty' value="{{ $cartItem->qty }}">
                                <div class="number-input">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" type="button"></button>
                                    <input class="quantity" min="1" name="qty" value="{{ $cartItem->qty }}" type="number">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus" type="button"></button>

                                    <span class="backgroundOPL"></span>
                                    <span class="backgroundOPR"></span>
                                </div>
                                <button type="submit" class="btn btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </button>
                                @csrf
                                @method('put')
                            </form>

                        <td>
                            {{ $cartItem->price * $cartItem->qty }} DHS
                        </td>
                        <td class="actions" data-th="">
                            <form action="{{ route('pannier.destroy', $cartItem->rowId) }}" method="post">
                                <button type="submit" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </button>
                                @csrf
                                @method('DELETE')
                            </form>

                        </td>
                        <td>
                            <form action="{{ route('commande.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="qty" value="{{ $cartItem->qty }}">
                                <input type="hidden" name="id" value="{{ $cartItem->id }}">
                                <input type="hidden" name="prix" value="{{ $cartItem->price * $cartItem->qty }}">
                                <button type="submit" class="btn btn-success">commander</button>

                            </form>
                        </td>
                        </td>

                    </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr class="pannier">
                    <td colspan="6" class="d-flex justify-content-between p-2 mb-2 " style="background-color: #e1f5fe;">
                        <h5 class="fw-bold mb-0">Total:</h5>
                        <h5 class="fw-bold mb-0">{{ $total }} DHS</h5>
                    </td>
                </tr>
                <tr class="pannier">
                    <td>
                        <a href="clientMenu" class="btn btn-danger">continue ...</a>
                    </td>
                    <td>
                        <a href="{{ route('comnd.create') }}" class="btn btn-danger">valider</a>
                    </td>

                </tr>
                <tr class="pannier">
                    <td>
                        <a href="{{ route('comnd.create') }}" class="btn btn-danger">valider</a>
                    </td>

                </tr>
            </tfoot>
        </table> --}}

        <table class="pannier">
                <thead class="pannier">
                <tr class="pannier">
                    <th scope="col" class="pannier">photo</th>
                    <th scope="col" class="pannier">repas</th>
                    <th scope="col" class="pannier">prix</th>
                    <th scope="col" class="pannier">quantite</th>
                    <th scope="col" class="pannier">subtotal</th>
                    <th scope="col" class="pannier">delete</th>
                </tr>
                </thead>
                <tbody class="pannier">
            @php
            $total = 0;
            @endphp
            @foreach ($cartItems as $cartItem)
                @php
                $total += $cartItem->price * $cartItem->qty;
                @endphp
            <tr data-id="{{ $cartItem->id }}" class="pannier">
                <td data-label="photo" style="display: flex;justify-content: center;" >
                    <img src="{{ $cartItem->model->image }}" class="img-fluid pannier" style="width: 150px;" alt="">
                </td>
                <td data-label="repas" class="pannier">{{ $cartItem->name }}</td>
                <td data-label="prix" class="pannier">
                    {{ $cartItem->price }} DHS
                </td>
                <td data-label="quantite" class="pannier">

                    <form action="{{ route('pannier.update', $cartItem->rowId) }}" method="post">
                        {{-- <input type="number" name='qty' value="{{ $cartItem->qty }}"> --}}
                        <div class="increment">
                            <div class="number-input">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" type="button"></button>
                                <input class="quantity" min="1" name="qty" value="{{ $cartItem->qty }}" type="number">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus" type="button"></button>

                                {{-- <span class="backgroundOPL"></span>
                                <span class="backgroundOPR"></span> --}}
                            </div>
                            <button type="submit" class="btn btn-outline-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </button>
                        </div>
                        @csrf
                        @method('put')
                    </form>
                </td>
                    <td data-label="subtotal" class="pannier">
                        {{ $cartItem->price * $cartItem->qty }} DHS
                    </td>
                    <td data-label="delete" class="actions pannier" data-th="">
                        <form action="{{ route('pannier.destroy', $cartItem->rowId) }}" method="post">
                            <button type="submit" class="btn btn-outline-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                            @csrf
                            @method('DELETE')
                        </form>

                    </td>
                    {{-- <td class="pannier">
                        <form action="{{ route('commande.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="qty" value="{{ $cartItem->qty }}">
                            <input type="hidden" name="id" value="{{ $cartItem->id }}">
                            <input type="hidden" name="prix" value="{{ $cartItem->price * $cartItem->qty }}">
                            <button type="submit" class="btn btn-success">commander</button>

                        </form>
                    </td> --}}
                {{-- </td> --}}

            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="pannier">
                <td colspan="6" class="d-flex justify-content-between p-2 mb-2 " style="background-color: #e1f5fe;">
                    <h5 class="fw-bold mb-0">Total:</h5>
                    <h5 class="fw-bold mb-0">{{ $total }} MAD</h5>
                </td>
            </tr>

        </tfoot>
        </table>


        <div>
            <div>
                <a href="clientMenu" class="btn btn-danger">continue ...</a>
            </div>
            <div>
                <a href="{{ route('comnd.create') }}" class="btn btn-danger">valider</a>
            </div>
        </div>
    </div>

{{-- {{gettype($cartItems)}} --}}


{{-- <table class="pannier">
    <caption>Statement Summary</caption>
    <thead class="pannier">
      <tr class="pannier">
        <th scope="col" class="pannier">Account</th>
        <th scope="col" class="pannier">Due Date</th>
        <th scope="col" class="pannier">Amount</th>
        <th scope="col" class="pannier">Period</th>
      </tr>
    </thead>
    <tbody class="pannier">
      <tr class="pannier">
        <td data-label="Due Date" class="pannier">Visa - 3412</td>
        <td data-label="Account" class="pannier">04/01/2016</td>
        <td data-label="Amount" class="pannier">$1,190</td>
        <td data-label="Period" class="pannier">03/01/2016 - 03/31/2016</td>
      </tr>
      <tr class="pannier">
        <td scope="row" data-label="Account" class="pannier">Visa - 6076</td>
        <td data-label="Due Date" class="pannier">03/01/2016</td>
        <td data-label="Amount" class="pannier">$2,443</td>
        <td data-label="Period" class="pannier">02/01/2016 - 02/29/2016</td>
      </tr>
    </tbody>
  </table> --}}





@endsection



<div class="wrap-item-mainmenu p-b-22">
    <h3 class="tit-mainmenu tit10 p-b-25" style="color:brown">
        Main
    </h3>
    @foreach ($main as $item)
        <!-- Item mainmenu -->
        <div class="item-mainmenu m-b-36">
            <div class="flex-w flex-b m-b-3">
                <a href="{{ route('cart.show', $item->id) }}" class="name-item-mainmenu txt21">

                    {{ $item->nom }}
                </a>

                <div class="line-item-mainmenu bg3-pattern"></div>

                <div class="price-item-mainmenu txt22">
                    {{ $item->prix }}$
                </div>
            </div>

            <span class="info-item-mainmenu txt23">
                {{ $item->description }}
            </span>
        </div>
    @endforeach
</div>
