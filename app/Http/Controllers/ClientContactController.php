<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class ClientContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
       return view('client.contact', compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.contact');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $contact=Contact::create([
            'id_user'=>Auth::id(),
            'name' => $request->name,
            'email' =>$request->email,
            'phone' => $request->phone,
            'message' => $request->message,
          ]);
          return redirect()->route('clientContact.index');
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
