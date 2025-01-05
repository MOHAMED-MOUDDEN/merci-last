<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateAppartement;

class AppartementController extends Controller
{
    // عرض جميع الشقق
    public function index()
    {
        $rooms = CreateAppartement::all();
        return view('appartement.index', compact('rooms'));
    }

    // عرض صفحة إنشاء شقة جديدة
    public function create()
    {
        return view('appartement.create');
    }

    // تخزين شقة جديدة في قاعدة البيانات
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'prix' => 'required|numeric|min:0',
            'etoiles' => 'nullable|integer|min:1|max:5',
            'extra_info' => 'nullable|string|max:500',
        ]);

        $validatedData['image'] = $this->uploadImage($request, 'upload/photos');

        CreateAppartement::create($validatedData);

        return redirect()->route('appartement.index')->with('success', 'Appartement ajouté avec succès!');
    }

    // تعديل شقة موجودة
    public function edit($id)
    {
        $room = CreateAppartement::findOrFail($id);
        return view('appartement.edit', compact('room'));
    }

    // تحديث الشقة في قاعدة البيانات
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric|min:0',
            'etoiles' => 'nullable|integer|min:1|max:5',
            'extra_info' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $room = CreateAppartement::findOrFail($id);

        $validatedData['image'] = $this->uploadImage($request, 'upload/photos', $room->image);

        $room->update($validatedData);

        return redirect()->route('appartement.index')->with('success', 'Appartement mis à jour avec succès!');
    }

    // حذف شقة
    public function destroy($id)
    {
        $room = CreateAppartement::findOrFail($id);

        if ($room->image && file_exists(public_path($room->image))) {
            unlink(public_path($room->image));
        }

        $room->delete();

        return redirect()->route('appartement.index')->with('success', 'Appartement supprimé avec succès!');
    }

    // عرض صفحة التحقق
    public function validation()
    {
        $cartItems = session('cartItems', []);
        return view('appartement.appartementValid', compact('cartItems'));
    }

    // عرض تفاصيل شقة مع التحقق من السعر
    public function Validation2($id)
    {
        $room = CreateAppartement::findOrFail($id);
        $price = $room->prix;

        return view('appartement.appartementValid', ['price' => $price]);
    }

    // عرض جميع الشقق في لوحة الإدارة
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

    // رفع الصورة ومعالجة المسارات
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
