<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class chefControler extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index()
    {
         $profile=Profil::where('id_user',Auth::id())->first();

        $chefs=Chef::all();
        return view('chef.index',compact('chefs','profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profile=Profil::where('id_user',Auth::id())->first();

       return view('chef.create',compact('profile','profile'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'image'=>'required|image',
            'bio'=>'required'
        ]);
        $image=$request->file('image');
        $newphoto=uniqid().$image->getClientOriginalName();
        $image->move(public_path('upload/photos'),$newphoto);

        $chef=Chef::create([
            'nom' => $request->nom,
            'image' => 'upload/photos/'.$newphoto,
            'bio'=>$request->bio
          ]);
          $profile=Profil::where('id_user',Auth::id())->first();

        return redirect()->route('chef.index')->with('succes', 'added succeffly')->with('profile',$profile);

    }

    /**
     * Display the specified resource.
     */
    public function show(Chef $chef)
    {
        $profile=Profil::where('id_user',Auth::id())->first();

      return view('chef.show',compact('chef','profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chef $chef)
    {
        $profile=Profil::where('id_user',Auth::id())->first();

       return view('chef.edit',compact('chef','profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chef $chef)
    {        $profile=Profil::where('id_user',Auth::id())->first();

        $request->validate([
            'nom' => 'required',
            'image'=>'required|image',
            'bio'=>'required'
        ]);
        if($request->hasfile('image')){
            $image=$request->image;
            $newimage=uniqid().$image->getClientOriginalName();
            $image->move(public_path('upload/photos'),$newimage);
            $chef->image='upload/photos/'.$newimage;
       }

      $chef->nom=$request->nom;
      $chef->bio=$request->bio;
      $chef->save();
        $chefs = Chef::all();
        return view('chef.index')->with('succes', 'updeted successflly')
            ->with('chefs', $chefs)
            ->with('profile',$profile);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chef $chef)
    {
        $profile=Profil::where('id_user',Auth::id())->first();

        $chef->delete();
        return redirect()->route('chef.index')->with('succes', 'deleted')->with('profile',$profile);

    }
}
