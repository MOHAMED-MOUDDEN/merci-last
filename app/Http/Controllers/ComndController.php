<?php

namespace App\Http\Controllers;

use App\Models\Comnd;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;

class ComndController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cartItems=Cart::content();
        return view('client.validation',compact('cartItems'));
    }

    public function showcomnds()
    {
        //
        
        $comnds = comnd::orderBy('created_at', 'desc')->paginate(15);
        return view('commande.index',compact('comnds'));
    }

    public function payee($id)
    {
        //
        // Page::where('id', $id)->update(array('image' => 'asdasd'));
        comnd::where('id', $id)->update(array('state' => 'Payée'));
        
        // $comnd = comnd::find($id);
        // $comnd->state = "Payée";
        // $comnd->save();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        return view('client.validation',compact('cartItems'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'phone' => 'required',
            'adresse' => 'required',
            'commande' => 'required'
        ]);

        $comnd=Comnd::create([
            'nom' => $request->nom,
            'prenom' =>$request->prenom,
            'phone' => $request->phone,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'commande' => $request->commande
            ]);

            $cartItems = Cart::destroy();
            return redirect()->back()->with('cartItems' , $cartItems)->with('thanks', 'Votre commande sera livrée bientôt, merci.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comnd $comnd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comnd $comnd)
    {
        //
        return view('commande.edit',compact('comnd'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comnd $comnd)
    {
        //
        $comnd->update($request->all());

         return redirect()->route('showcomnds');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comnd $comnd)
    {
        //
        $comnd->delete();
        return redirect()->back();
    }
}
