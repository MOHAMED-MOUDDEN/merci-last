<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categoryController extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index()
    {
        $profile=Profil::where('id_user',Auth::id())->first();

        $categories = Category::all();
        return view('category.index', compact('categories','profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profile=Profil::where('id_user',Auth::id())->first();

        return view('category.create',compact('profile','profile'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $category=Category::create([
            'name' => $request->name
          ]);
          $profile=Profil::where('id_user',Auth::id())->first();

        return redirect()->route('category.index')->with('succes', 'added succeffly')->with('profile',$profile);
    }

    public function show(Category $category)
    {
        $profile=Profil::where('id_user',Auth::id())->first();

        return view('category.show',compact('category','profile'));
    }

    public function edit(Category $category)
    {
        $profile=Profil::where('id_user',Auth::id())->first();

       return view('category.edit',compact('category','profile'));
    }

    public function update(Request $request, Category $category)
    {
        $profile=Profil::where('id_user',Auth::id())->first();

        $category->update($request->all());
        $categories = Category::all();
        return view('category.index')->with('succes', 'updeted successflly')
            ->with('categories', $categories)
            ->with('profile',$profile);
    }

    public function destroy(Category $category)
    {
        $profile=Profil::where('id_user',Auth::id())->first();

        $category->delete();
        return redirect()->route('category.index')->with('succes', 'deleted')->with('profile',$profile);

    }
}
