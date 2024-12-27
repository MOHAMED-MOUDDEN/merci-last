<?php

namespace App\Http\Controllers;
use App\Models\Repas;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class clientMenu extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        $Espresso = Repas::where('type','Espresso')->get();
        $Thé = Repas::where('type','Thé')->get();
        $Frappuccino = Repas::where('type','Frappuccino')->get();
        $Cappuccino = Repas::where('type','Cappuccino')->get();
        $Café_crème = Repas::where('type','Café crème')->get();
        $Ice_tea = Repas::where('type','Ice tea')->get();
        $Ice_Coffée = Repas::where('type','Ice Coffée')->get();
        $Fondue_Au_Chocolat = Repas::where('type','Fondue Au Chocolat')->get();
        $Petits_Déjeuners = Repas::where('type','Petits Déjeuners')->get();
        $Brunch = Repas::where('type','Brunch')->get();
        $Supplements = Repas::where('type','Supplements')->get();
        return view('client.menu.standard-drinks',compact('Supplements', 'Espresso','Thé','Frappuccino', 'Cappuccino', 'Café_crème', 'Ice_tea', 'Ice_Coffée', 'Fondue_Au_Chocolat', 'Petits_Déjeuners', 'Brunch', 'cartItems'));
    }

    public function index_sucre()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        $Pancake = Repas::where('type','Pancake')->get();
        $Crêpe = Repas::where('type','Crêpe')->get();
        $Gaufre = Repas::where('type','Gaufre')->get();
        $Petits_Déjeuners = Repas::where('type','Petits Déjeuners')->get();
        $Brunch = Repas::where('type','Brunch')->get();
        $Supplements = Repas::where('type','Supplements')->get();
        return view('client.menu.sucre',compact('Supplements', 'Pancake','Crêpe','Gaufre', 'Petits_Déjeuners', 'Brunch', 'cartItems'));
    }

    public function index_sale()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        $Crêpe_salé = Repas::where('type','Crêpe salé')->get();
        $Petits_Déjeuners = Repas::where('type','Petits Déjeuners')->get();
        $Brunch = Repas::where('type','Brunch')->get();
        $Supplements = Repas::where('type','Supplements')->get();
        $Supplements = Repas::where('type','Supplements')->get();
        return view('client.menu.sale',compact('Supplements', 'Crêpe_salé', 'Petits_Déjeuners', 'Brunch', 'cartItems'));
    }

    public function index_dessert()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        $Dessert = Repas::where('type','Dessert')->get();
        $Petits_Déjeuners = Repas::where('type','Petits Déjeuners')->get();
        $Brunch = Repas::where('type','Brunch')->get();
        $Supplements = Repas::where('type','Supplements')->get();
        return view('client.menu.Dessert',compact('Supplements', 'Dessert','Petits_Déjeuners', 'Brunch', 'cartItems'));
    }
    public function index_sandwich()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        $Sandwich = Repas::where('type','Sandwich')->get();
        $Petits_Déjeuners = Repas::where('type','Petits Déjeuners')->get();
        $Brunch = Repas::where('type','Brunch')->get();
        $Supplements = Repas::where('type','Supplements')->get();
        return view('client.menu.sandwich',compact('Supplements','Sandwich','Petits_Déjeuners', 'Brunch', 'cartItems'));
    }
    public function index_Gdrinks()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        $Nos_Jus = Repas::where('type','Nos Jus')->get();
        $Cocktail = Repas::where('type','Cocktail')->get();
        $Nos_Smoothies = Repas::where('type','Nos Smoothies')->get();
        $Milk_shakes = Repas::where('type','Milk shakes')->get();
        $Mojito = Repas::where('type','Mojito')->get();
        $Detox = Repas::where('type','Detox')->get();
        $Boissons_Fraiches = Repas::where('type','Boissons Fraiches')->get();
        $Petits_Déjeuners = Repas::where('type','Petits Déjeuners')->get();
        $Brunch = Repas::where('type','Brunch')->get();
        $Supplements = Repas::where('type','Supplements')->get();
        return view('client.menu.gold-drinks',compact('Supplements','Nos_Jus', 'Cocktail', 'Nos_Smoothies', 'Milk_shakes', 'Mojito', 'Detox', 'Boissons_Fraiches', 'Petits_Déjeuners', 'Brunch', 'cartItems'));
    }
    public function index_Alacarte()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        $à_la_carte = Repas::where('type','à la carte')->get();
        $Petits_Déjeuners = Repas::where('type','Petits Déjeuners')->get();
        $Brunch = Repas::where('type','Brunch')->get();
        $Supplements = Repas::where('type','Supplements')->get();
        return view('client.menu.a-lacarte',compact('Supplements', 'à_la_carte', 'Petits_Déjeuners', 'Brunch', 'cartItems'));
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
