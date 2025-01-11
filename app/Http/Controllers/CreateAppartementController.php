<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateAppartement;

class CreateAppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = CreateAppartement::all();
        return view('appartement.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appartement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric|min:0',
            'etoiles' => 'nullable|integer|min:1|max:5',
            'extra_info' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $this->uploadImage($request, 'images/photos');

        CreateAppartement::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
            'etoiles' => $request->etoiles ?? 3,
            'extra_info' => $request->extra_info,
            'image' => $imagePath,
        ]);

        return redirect()->route('appartement.index')->with('success', 'Appartement ajouté avec succès!');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $room = CreateAppartement::findOrFail($id);
        return view('appartement.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric|min:0',
            'etoiles' => 'nullable|integer|min:1|max:5',
            'extra_info' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $room = CreateAppartement::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($room->image && file_exists(public_path($room->image))) {
                unlink(public_path($room->image));
            }

            $room->image = $this->uploadImage($request, 'upload/photos');
        }

        $room->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
            'etoiles' => $request->etoiles ?? $room->etoiles,
            'extra_info' => $request->extra_info,
        ]);

        return redirect()->route('appartements.index')->with('success', 'Appartement mis à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $room = CreateAppartement::findOrFail($id);

        if ($room->image && file_exists(public_path($room->image))) {
            unlink(public_path($room->image));
        }

        $room->delete();

        return redirect()->route('appartements.index')->with('success', 'Appartement supprimé avec succès!');
    }

    /**
     * Upload the image and return its path.
     */
    private function uploadImage(Request $request, $directory)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($directory), $imageName);
            return $directory . '/' . $imageName;
        }
        return null;
    }
}
