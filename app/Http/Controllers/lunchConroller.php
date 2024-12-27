<?php

namespace App\Http\Controllers;

use App\Models\Lunch;
use Illuminate\Http\Request;

class lunchConroller extends Controller
{
    public function __construnct(){
       $this->middleware('auth');
    }
    public function index()
    {
        $lunchs = Lunch::all();
        return view('lunch.index', compact('lunchs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lunch.create');
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

        $lunch = Lunch::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
            'image' => 'upload/photos/'.$newimage
        ]);

        return redirect()->route('lunch.index')->with('succes', 'added succeffly');
    }

    public function show( $id)
    {
        $lunch=Lunch::where('id',$id)->first();
        return view('lunch.show')->with('lunch',$lunch);
    }

    public function edit(Lunch $lunch)
    {
       return view('lunch.edit',compact('lunch'));
    }

    public function update(Request $request, Lunch $lunch)
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
             $lunch->image='upload/photos/'.$newimage;
        }
        $lunch->nom=$request->nom;
        $lunch->description=$request->description;
        $lunch->prix=$request->prix;
         $lunch->save();
         return redirect()->route('lunch.index')->with('succes', 'updated succeffly');

    }
    public function destroy(Lunch $lunch)
  {
        $lunch->delete();
        return redirect()->route('lunch.index')->with('succes', 'deleted');

    }
}
