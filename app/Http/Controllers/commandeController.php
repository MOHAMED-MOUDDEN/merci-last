<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\Profil;
use App\Models\Repas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile=Profil::where('id_user',Auth::id())->first();
        $commandes=Command::all();
        return view('commande.index',compact('commandes','profile'));
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
        $repas=Repas::where('id',$request->id)->first();
        $profile=Profil::where('id_user',Auth::id())->first();
        $request->validate([
            'id' => 'required',
            'qty' => 'required',
            'prix' => 'required',
        ]);

        $command=Command::create([
            'repas' => $repas->nom,
            'prix_total' =>$request->prix,
            'quantite' => $request->qty,
            'adresse' => $profile->adresse
          ]);
          return back();
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
        $commande=Command::where('id',$id)->first();
        $profile=Profil::where('id_user',Auth::id())->first();
        return view('commande.edit',compact('commande','profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Command $commande)
    {
         $profile=Profil::where('id_user',Auth::id())->first();
         $commande->update($request->all());

         return redirect()->route('commande.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Command $commande)
    {
      $commande->delete();
      $profile=Profil::where('id_user',Auth::id());
 return     redirect()->back();
    }
}
