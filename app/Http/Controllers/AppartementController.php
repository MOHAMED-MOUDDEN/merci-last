<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appartement;

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

    // تخزين شقة جديدة في قاعدة البيانات
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

        Appartement::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
            'etoiles' => $request->etoiles ?? 3,
            'extra_info' => $request->extra_info,
            'image' => $imagePath,
        ]);

        return redirect()->route('appartement.index')->with('success', 'Appartement ajouté avec succès!');
    }
    // تعديل شقة موجودة
    public function edit($id)
    {
        $room = Appartement::findOrFail($id);
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Allowing image validation
        ]);

        $room = Appartement::findOrFail($id);

        // Handle image upload if new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($room->image && file_exists(public_path($room->image))) {
                unlink(public_path($room->image));
            }

            // Upload the new image
            $validatedData['image'] = $this->uploadImage($request, 'upload/photos');
        } else {
            // If no new image provided, keep the old image
            $validatedData['image'] = $room->image;
        }

        // Update the room record
        $room->update($validatedData);

        return redirect()->route('appartement.index')->with('success', 'Appartement mis à jour avec succès!');
    }

    // حذف شقة
    public function destroy($id)
    {
        $room = Appartement::findOrFail($id);

        // حذف الصورة إذا كانت موجودة
        if ($room->image && file_exists(public_path($room->image))) {
            unlink(public_path($room->image));
        }

        // حذف الشقة
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
        $rooms =Appartement::all();
        return view('admin.rooms.index', compact('rooms'));
    }

    public function appartementAdmin()
    {
        $rooms = Appartement::all();
        return view('appartement.admin', compact('rooms'));
    }

    // رفع الصورة ومعالجة المسارات
private function uploadImage(Request $request, $directory)
{
    // التحقق من وجود الصورة في الطلب
    if ($request->hasFile('image')) {
        // التحقق من نوع وحجم الصورة
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // الحصول على الصورة
        $image = $request->file('image');

        // إنشاء اسم فريد للصورة
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // تخزين الصورة في مجلد public داخل مجلد images/photos
        $path = public_path($directory);

        // التأكد من أن المجلد موجود، إذا لم يكن موجودًا، يتم إنشاؤه
        if (!file_exists($path)) {
            mkdir($path, 0775, true); // 0775: صلاحيات الكتابة والقراءة
        }

        // نقل الصورة إلى المجلد المحدد
        $image->move($path, $imageName);

        // إرجاع المسار الذي تم تخزين الصورة فيه
        return $directory . '/' . $imageName;
    }

    // إذا لم تكن هناك صورة في الطلب، إرجاع null
    return null;
}


}
