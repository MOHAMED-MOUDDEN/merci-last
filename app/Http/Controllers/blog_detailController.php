<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class blog_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       return view('client.blog-detail');
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
    { $request->validate([
        'id_blog'=>'required',
        'commantaire'=>"required",
        'name'=>"required",
        'email'=>"required"
    ]);
    $comment=Comment::create([
    'id_blog'=>$request->id_blog,
    'commantaire'=>$request->commantaire,
    'name'=>$request->name,
    'email'=>$request->email
    ]);
      return redirect()->route('clientBlog_detail.show',$request->id_blog );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $count=Comment::where('id_blog',$id)->count();
        $blog=Blog::find($id);
        $profile=Profil::where('id_user',Auth::id())->first();
        $comments=Comment::where('id_blog',$id)->get();
        $categories=Category::all();
        return view('client.blog-detail',compact('comments','count','profile','blog','categories'));

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
