<?php

namespace App\Http\Controllers;

use App\Models\Repas;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $cartItems=Cart::content();
      session()->put('ItemsCount', count($cartItems));  
      $repas=Repas::where('id',$id)->first();
      return view('client.cart',compact('repas', 'cartItems'));
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
