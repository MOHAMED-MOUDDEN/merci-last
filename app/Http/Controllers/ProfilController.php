<?php

namespace App\Http\Controllers;

use App\Models\Lunch;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{ public function index()
    {
        $profile=Profil::where('id_user',Auth::id())->first();
        return view('profile.index',compact('profile'));
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
        $request->validate([
            'phone' => 'required',
            'adresse' => 'required',
            'facebook' => 'required',
            'image' => 'required|image',
            'bio' => 'required',
            'genre' => 'required',
            'insta'=>'required'

        ]);
        $image=$request->file('image');
        $newimage=uniqid().$image->getClientOriginalName();
        $image->move(public_path('upload/photos'),$newimage);

        $profile = Profil::create([
            'id_user'=>Auth::id(),
            'phone' => $request->phone,
            'adresse' => $request->adresse,
            'facebook' => $request->facebook,
            'image' => 'upload/photos/'.$newimage,
            'genre' => $request->genre,
            'bio'=>$request->bio,
            'insta' => $request->insta

        ]);

        return redirect()->route('profile.index');

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
    public function update(Request $request, $id)
    {
        $profile=Profil::find($id);
        $this->validate($request,[
            'phone' => 'required',
            'adresse' => 'required',
            'facebook' => 'required',
            'image' => 'required|image',
            'bio' => 'required',
            'genre' => 'required',
            'insta'=>'required'

        ]);
        if($request->hasfile('image')){
        $image=$request->file('image');
        $newimage=uniqid().$image->getClientOriginalName();
        $image->move(public_path('upload/photos'),$newimage);
        $profile->image='upload/photos/'.$newimage;
        }
       $profile->phone=$request->phone;
       $profile->adresse=$request->adresse;
       $profile->facebook=$request->facebook;
       $profile->bio=$request->bio;
       $profile->genre=$request->genre;
       $profile->insta=$request->insta;
       $profile->save();

        return redirect()->route('profile.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
