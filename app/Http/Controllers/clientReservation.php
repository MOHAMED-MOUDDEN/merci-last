<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class clientReservation extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        return view('client.reservation', compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'date'=>'required',
            'heure'=>'required',
            'gens'=>'required',
            'nom'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ]);
        $reservation=Reservation::create([
          'id_user'=>Auth::id(),
          'date'=>$request->date,
          'heure'=>$request->heure,
          'gens'=>$request->gens,
          'nom'=>$request->nom,
          'phone'=>$request->phone,
          'email'=>$request->email
        ]);
        return redirect()->route('clientReservation.index')->with('msg','thank you for your trust, wait for our call just after one hour to confirm your reservation');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
