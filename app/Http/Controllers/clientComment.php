<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class clientComment extends Controller
{
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
      return redirect()->route('clientComment.show',$request->id_blog);
    }
    public function show(string $id)
    {

        $profile=Profil::where('id_user',Auth::id())->first();

        $blog=Blog::find($id);
        $comments = DB::table('comments')
        ->where('id_blog', '=', $id)
        ->get();
        return view('client.comment',compact('comments','profile'));
    }
}
