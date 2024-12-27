<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        
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
            'image'=>'required',
            'id_blog'=>'required',
            'commantaire'=>"required",
            'name'=>"required",
            'email'=>"required"
        ]);
        $comment=Comment::create([
        'image'=>$request->image,
        'id_blog'=>$request->id_blog,
        'commantaire'=>$request->commantaire,
        'name'=>$request->name,
        'email'=>$request->email
        ]);
        $profile=Profil::where('id_user',Auth::id())->first();
      return redirect()->route('comment.show',$request->id_blog)->with('profile','profile');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   $count=Comment::where('id_blog',$id)->count();
        $blog=Blog::find($id);
        $comments=Comment::where('id_blog',$id)->get();
        $profile=Profil::where('id_user',Auth::id())->first();
        return view('comment.index',compact('comments','count','id','profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
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
