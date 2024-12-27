<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class blogController extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
     public function index()
     {
        $profile=Profil::where('id_user',Auth::id())->first();

         $blogs = Blog::all();
         return view('blog.index', compact('blogs','profile'));
     }

     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
        $profile=Profil::where('id_user',Auth::id())->first();

        $categories=Category::all();
         return view('blog.create')->with('categories',$categories)->with('profile',$profile);
     }

     public function store(Request $request)
     {
        $this->validate($request,[
            'image'=>'required|image',
            'titre'=>'required',
            'description'=>'required',
            'category'=>'required'
        ]);
        $image=$request->file('image');
        $newimage=uniqid().$image->getClientOriginalName();
        $image->move(public_path('upload/photos'),$newimage);

        $blog=Blog::create([
          'id_user'=>Auth::id(),
          'titre'=>$request->titre,
          'description'=>$request->description,
          'id_category'=>$request->category,
          'image'=>'upload/photos/'.$newimage
        ]);
        $profile=Profil::where('id_user',Auth::id())->first();

         return redirect()->route('blog.index')->with('succes', 'added succeffly')->with('profile',$profile);
     }

     public function edit(Blog $blog){
        $categories=Category::all();
        $profile=Profil::where('id_user',Auth::id())->first();

        return view('blog.edit')->with('blog',$blog)->with('categories',$categories)->with('profile',$profile);
     }
     public function update(Request $request, Blog $blog)
    {
        $this->validate($request,[
            'image'=>'required|image',
            'titre'=>'required',
            'description'=>'required',
            'category'=>'required'
    ]);

        if($request->hasfile('image')){
             $image=$request->image;
             $newimage=uniqid().$image->getClientOriginalName();
             $image->move(public_path('upload/photos'),$newimage);
             $blog->image='upload/photos/'.$newimage;
        }
        $blog->titre=$request->titre;
        $blog->description=$request->description;
        $blog->id_category=$request->category;

         $blog->save();
         $profile=Profil::where('id_user',Auth::id())->first();

         return redirect()->route('blog.index',compact('profile','profile'));


    }
    public function destroy(Blog $blog){
        $blog->delete();
        $profile=Profil::where('id_user',Auth::id())->first();

        return redirect()->route('blog.index',compact('profile','profile'));
}
}
