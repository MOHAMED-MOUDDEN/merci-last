<?php

namespace App\Http\Controllers;

use App\Models\Dinner;
use Illuminate\Http\Request;

class dinnerConroller extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index()
    {
        $dinners = Dinner::all();
        return view('dinner.index', compact('dinners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dinner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'image' => 'required|image'
        ]);
        $image=$request->file('image');
        $newimage=uniqid().$image->getClientOriginalName();
        $image->move(public_path('upload/photos'),$newimage);

        $dinner = Dinner::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
            'image' => 'upload/photos/'.$newimage
        ]);
        return redirect()->route('dinner.index')->with('succes', 'added succeffly');
    }

    public function show(Dinner $dinner)
    {
        return view('dinner.show',compact('dinner'));
    }

    public function edit(Dinner $dinner)
    {
       return view('dinner.edit',compact('dinner'));
    }

    public function update(Request $request, Dinner $dinner)
    {

        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required',

        ]);
        if($request->hasfile('image')){
             $image=$request->file('image');
             $newimage=uniqid().$image->getClientOriginalName();
             $image->move(public_path('upload/photos'),$newimage);
             $dinner->image='upload/photos/'.$newimage;
        }
        $dinner->nom=$request->nom;
        $dinner->description=$request->description;
        $dinner->prix=$request->prix;
         $dinner->save();
         return redirect()->route('dinner.index')->with('succes', 'updated succeffly');


    }

    public function destroy(Dinner $dinner)
    {
        $dinner->delete();
        return redirect()->route('dinner.index')->with('succes', 'deleted');

    }
}
