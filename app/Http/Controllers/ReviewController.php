<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews=Review::all();
        return view('reviews.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'rate' => 'required',
            'comment' => 'required',
            
        ]);

        if (!is_null($request->file('image')))
        {
            $image=$request->file('image');
            $newphoto=uniqid().$image->getClientOriginalName();
            $image->move(public_path('upload/photos'),$newphoto);

            Review::create([
                'nom' =>$request->nom,
                'rate' => $request->rate,
                'comment' => $request->comment,
                'image' => 'upload/photos/'.$newphoto
              ]);
        }
        

        Review::create([
            'nom' =>$request->nom,
            'rate' => $request->rate,
            'comment' => $request->comment
          ]);
          return redirect()->back()->with('succes', 'added succeffly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
       
        return view('reviews.edit',compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {

        if($request->hasfile('image')){
            $image=$request->image;
            $newimage=uniqid().$image->getClientOriginalName();
            $image->move(public_path('upload/photos'),$newimage);
            $review->image='upload/photos/'.$newimage;
       }

        // $review->update($request->all());

        $review->save();
        $reviews = Review::all();

        return redirect()->route('reviews.index')->with('reviews', $reviews);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->back();
    }
}
