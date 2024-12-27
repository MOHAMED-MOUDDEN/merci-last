<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactConroller extends Controller
{
    public function __construnct(){
        $this->middleware('auth');
     }
    public function index()
    {$profile=Profil::where('id_user',Auth::id())->first();
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(15);
        return view('contact.index', compact('contacts','profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profile=Profil::where('id_user',Auth::id())->first();
        return view('contact.create',compact('profile'));
    }

    public function store(Request $request)
    {
        $profile=Profil::where('id_user',Auth::id())->first();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $contact=Contact::create([
            'id_user'=>Auth::id(),
            'name' => $request->name,
            'email' =>$request->email,
            'phone' => $request->phone,
            'message' => $request->message,
          ]);
        // return redirect()->route('contact.index')->with('succes', 'added succeffly')->with('profile',$profile);
        return redirect()->back()->with('succes', 'added succeffly');
    }

    public function show(Contact $contact)
    {
        $profile=Profil::where('id_user',Auth::id())->first();

        return view('contact.show',compact('contact','profile'));
    }

    public function edit(Contact $contact)
    {
        $profile=Profil::where('id_user',Auth::id())->first();

       return view('contact.edit',compact('contact','profile'));
    }

    public function update(Request $request, contact $contact)
    {
        $profile=Profil::where('id_user',Auth::id())->first();

        $contact->update($request->all());
        $contacts = Contact::all();
        return view('contact.index')->with('succes', 'updeted successflly')
            ->with('contacts', $contacts)->with('profile',$profile);
    }

    public function destroy(Contact $Contact)
    {
        $profile=Profil::where('id_user',Auth::id())->first();

        $Contact->delete();
        return redirect()->route('contact.index')->with('succes', 'deleted')->with('profile',$profile);

    }
}
