<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class clientBlog extends Controller
{
    public function index()
    {
        $blogs=Blog::all();
        $categories=Category::all();
        return view('client.blog',compact('blogs','categories'));
    }
    public function search(Request $request){
    if($request->search){
        $blogs=Blog::where('id_category',$request->search)->latest()->paginate(5);
         $categories=Category::all();
        return view('client.blog',compact('blogs','categories'));

    }
    else{
        return redirect()->back();
    }
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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
