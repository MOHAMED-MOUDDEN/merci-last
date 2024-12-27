<?php

namespace App\Http\Controllers;

use App\Models\Repas;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class pannierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));        
        return view('client.pannier',compact('cartItems'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function add(Request $request, string $id)
    {
        if (!is_null($request->oid))
        {
            session()->  put('oid', $request->oid);
        }
        
        $repas = Repas::where('id', $id)->first();
        $cartItem=Cart::add($id,$repas->nom,$request->quantite,$repas->prix,['size'=>'medium'])->associate('App\Models\Repas');
        return redirect()->back()->with('cartItem' , $cartItem)->with('msg', 'added');

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
     Cart::update($id,['qty'=>$request->qty,"options"=>['size'=>$request->size]]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
     Cart::remove($id);
      return back();
    }

}
