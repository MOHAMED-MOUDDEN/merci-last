<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Chef;
use App\Models\Review;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Comment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class clientIndex extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        $comments=Comment::latest()->paginate(5);
        $blogs=Blog::latest()->paginate(3);
        $reviews = Review::all();
     return view('client.index',compact('comments','blogs', 'cartItems', 'reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.index');
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
        return redirect()->route('clientIndex.index')->with('msg','thank you for your trust, wait for our call just after one hour to confirm your reservation');
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
