<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class galeryConroller extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index()
    {
        $profile=Profil::where('id_user',Auth::id())->first();
        $photos = Photo::all();
        return view('photos.index', compact('photos','profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profile=Profil::where('id_user',Auth::id())->first();
        return view('photos.create',compact('profile','profile'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'photo' => 'required|image'
        ]);
        $photo=$request->file('photo');
        $newphoto=uniqid().$photo->getClientOriginalName();
        $photo->move(public_path('upload/photos'),$newphoto);

        $photo = Photo::create([
            'type' => $request->type,
            'photo' => 'upload/photos/'.$newphoto
        ]);
        $profile=Profil::where('id_user',Auth::id())->first();
        return redirect()->route('photos.index')->with('succes', 'added succeffly')
        ->with('profile',$profile);
    }

    public function show(Photo $photo)
    {
        $profile=Profil::where('id_user',Auth::id())->first();
        return view('photos.show',compact('photo','profile'));
    }

    public function edit(Photo $photo)
    { $profile=Profil::where('id_user',Auth::id())->first();
       return view('photos.edit',compact('photo','profile'));
    }
    public function update(Request $request, Photo $photo)
    {

        $request->validate([
            'type' => 'required',
        ]);
        if($request->hasFile('photo'))
        {
        $image=$request->file('photo');
        $newphoto=uniqid().$image->getClientOriginalName();
        $image->move(public_path('upload/photos'),$newphoto);
        $photo->photo ='upload/photos/'.$newphoto;
        }
       $photo->type=$request->type;
       $photo->save();
       $profile=Profil::where('id_user',Auth::id())->first();
    return redirect()->route('photos.index')->with('succes', 'updated succeffly')->with('profile',$profile);

    }

    public function destroy(Photo $photo)
    {
        $profile=Profil::where('id_user',Auth::id())->first();
        $photo->delete();
        return redirect()->route('photos.index')->with('succes', 'deleted')->with('profile',$profile);

    }
}
