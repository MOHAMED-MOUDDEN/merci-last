<?php

namespace App\Http\Controllers;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


use Illuminate\Http\Request;
use App\Models\Appartement;
use Illuminate\Support\Str;

class AppartementController extends Controller
{
    // عرض جميع الشقق
    public function index()
    {
        $rooms = Appartement::all();
        return view('appartement.index', compact('rooms'));
    }

    // عرض صفحة إنشاء شقة جديدة
    public function create()
    {
        return view('appartement.create');
    }

    // تخزين شقة جديدة
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric|min:0',
            'etoiles' => 'nullable|integer|min:1|max:5',
            'extra_info' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', // يزيد الحد إلى 10 ميجابايت
        ]);

        $imagePath = $this->uploadImage($request, 'images/brunches');
        Appartement::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
            'etoiles' => $request->etoiles ?? 3,
            'extra_info' => $request->extra_info,
            'image' => $imagePath, // تخزين الرابط في قاعدة البيانات
        ]);

        return redirect()->route('appartement.index')->with('success', 'Appartement ajouté avec succès!');
    }

    // تعديل شقة موجودة
    public function edit($id)
    {
        $room = Appartement::findOrFail($id);
        return view('appartement.edit', compact('room'));
    }

    // تحديث بيانات شقة
    public function update(Request $request, $id)
    {
        $room = Appartement::findOrFail($id);

        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric|min:0',
            'etoiles' => 'nullable|integer|min:1|max:5',
            'extra_info' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', // يزيد الحد إلى 10 ميجابايت

        ]);

        if ($request->hasFile('image')) {
            $imagePath = $this->uploadImage($request, 'images/brunches');
            $room->update(['image' => $imagePath]); // تحديث رابط الصورة في قاعدة البيانات
        }


        $room->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
            'etoiles' => $request->etoiles ?? 3,
            'extra_info' => $request->extra_info,
        ]);

        return redirect()->route('appartement.index')->with('success', 'Appartement mis à jour avec succès!');
    }

    // حذف شقة
    public function destroy($id)
    {
        $room = Appartement::findOrFail($id);
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
        $room = Appartement::findOrFail($id);
        $price = $room->prix;

        return view('appartement.appartementValid', ['price' => $price]);
    }

    // عرض جميع الشقق في لوحة الإدارة
    public function adminRooms()
    {
        $rooms = Appartement::all();
        return view('admin.rooms.index', compact('rooms'));
    }

    public function appartementAdmin()
    {
        $rooms = Appartement::all();
        return view('appartement.admin', compact('rooms'));
    }

    // تحميل الصورة وتخزينها في مجلد التخزين المناسب
   // تحميل الصورة وتخزينها في مجلد التخزين المناسب
   public function uploadImage(Request $request, $folder)
   {
       if ($request->hasFile('image')) {
           $user_img = $request->file('image');
           
           $image_url = Cloudinary::upload($user_img->getRealPath(), [
               'folder' => $folder,
               'use_filename' => true,
               'unique_filename' => false,
               'overwrite' => true,
               'http_client' => [
                   'verify' => false,  // Disable SSL verification
               ]
           ])->getSecurePath();
   
           return $image_url;
       }
   
       return null;
   }
   

}
