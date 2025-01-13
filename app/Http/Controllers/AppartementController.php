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

        // رفع الصورة وتخزين المسار في قاعدة البيانات
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

        // إذا كانت الصورة جديدة، نقوم بتحميلها
        if ($request->hasFile('image')) {
            // حذف الصورة القديمة إذا كانت موجودة
            if ($room->image && file_exists(public_path($room->image))) {
                unlink(public_path($room->image));
            }

            // تحميل الصورة الجديدة
            $validatedData['image'] = $this->uploadImage($request, 'images/photos');
        } else {
            // إذا لم يكن هناك صورة جديدة، نحتفظ بالصورة القديمة
            $validatedData['image'] = $room->image;
        }

        // تحديث الشقة في قاعدة البيانات
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
        $rooms = Appartement::all();
        return view('admin.rooms.index', compact('rooms'));
    }

    public function appartementAdmin()
    {
        $rooms = Appartement::all();
        return view('appartement.admin', compact('rooms'));
    }

    // تحميل الصورة وتخزينها في مجلد التخزين المناسب
    private function uploadImage(Request $request, $directory)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // تخزين الصورة في مجلد public
            $image->move(public_path($directory), $imageName);

            // إرجاع المسار الصحيح للصورة التي تم تخزينها
            return $directory . '/' . $imageName;
        }

        return null;
    }
}
