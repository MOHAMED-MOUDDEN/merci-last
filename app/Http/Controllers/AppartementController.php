<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateAppartement;

class AppartementController extends Controller
{


    public function index()
    {
        $rooms = CreateAppartement::all();
        return view('appartement.index', compact('rooms'));
    }

    // تخزين شقة جديدة في قاعدة البيانات
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'prix' => 'required|numeric',
            'etoiles' => 'required|integer|min:1|max:5',
            'extra_info' => 'nullable|string',
        ]);

        $validatedData['image'] = $this->uploadImage($request, 'images/appartements');

        CreateAppartement::create($validatedData);

        return redirect()->route('appartement.index')->with('success', 'Appartement ajouté avec succès!');
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'etoiles' => 'required|integer|min:1|max:5',
            'extra_info' => 'nullable|string',
        ]);

        $room = CreateAppartement::findOrFail($id);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images', 'public');
        }

        $room->update($validatedData);

        return redirect()->route('appartement.index')->with('success', 'Appartement mis à jour avec succès!');
    }

    public function validation()
    {
        $cartItems = session('cartItems', []);
        return view('appartement.appartementValid', compact('cartItems'));
    }

    public function adminRooms()
    {
        $rooms = CreateAppartement::all();
        return view('admin.rooms.index', compact('rooms'));
    }

    public function appartementAdmin()
    {
        $rooms = CreateAppartement::all();
        return view('appartement.admin', compact('rooms'));
    }

    public function edit($id)
    {
        $room = CreateAppartement::findOrFail($id);
        return view('appartement.edit', compact('room'));
    }

    public function Validation2($id)
{
    $room = CreateAppartement::findOrFail($id);
    $price = $room->prix;

    return view('appartement.appartementValid', ['price' => $price]);
}


    public function showRooms()
    {
        $rooms = CreateAppartement::all();
        return view('appartement.appartementValid', compact('rooms'));
    }
        // رفع الصورة
        private function uploadImage(Request $request, $directory, $existingImage = null)
        {
            if ($request->hasFile('image')) {
                if ($existingImage && file_exists(public_path($existingImage))) {
                    unlink(public_path($existingImage));
                }

                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path($directory), $imageName);
                return $directory . '/' . $imageName;
            }

            return $existingImage;
        }
}

