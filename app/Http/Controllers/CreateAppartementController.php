<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateAppartement;

class CreateAppartementController extends Controller
{
    // عرض جميع الغرف
    public function index()
    {
        $rooms = CreateAppartement::all();
        return view('appartement.index', compact('rooms'));
    }

    // عرض صفحة إنشاء غرفة جديدة
    public function create()
    {
        return view('appartement.create');
    }

    // تخزين الغرفة الجديدة في قاعدة البيانات
    public function store(Request $request)
    {
        // التحقق من صحة البيانات المدخلة
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'prix' => 'required|numeric|min:0',
            'etoiles' => 'nullable|integer|min:1|max:5',
            'extra_info' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName); 
            $validatedData['image'] = 'images/' . $imageName; 
        }

        $validatedData['etoiles'] = $validatedData['etoiles'] ?? 3;

        CreateAppartement::create($validatedData);

        return redirect()->route('appartements.index')->with('success', 'Appartement créé avec succès !');
    }

    // عرض صفحة تعديل غرفة معينة
    public function edit($id)
    {
        // البحث عن الغرفة باستخدام المعرف
        $appartement = CreateAppartement::findOrFail($id);

        // عرض صفحة التعديل مع تمرير بيانات الغرفة
        return view('appartement.edit', compact('appartement'));
    }

    // تحديث الغرفة في قاعدة البيانات
    public function update(Request $request, $id)
    {
        // التحقق من صحة البيانات المدخلة
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric|min:0',
            'etoiles' => 'nullable|integer|min:1|max:5',
            'extra_info' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // إضافة شرط الصورة
        ]);

        // البحث عن الغرفة باستخدام المعرف
        $appartement = CreateAppartement::findOrFail($id);

        // التعامل مع رفع الصورة إذا كانت موجودة
        if ($request->hasFile('image')) {
            // حذف الصورة القديمة إذا كانت موجودة
            if ($appartement->image && file_exists(public_path($appartement->image))) {
                unlink(public_path($appartement->image));
            }

            // رفع الصورة الجديدة
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] = 'images/' . $imageName; // حفظ المسار الكامل للصورة
        }

        // تحديث بيانات الغرفة
        $appartement->update($validated);

        // إعادة التوجيه إلى صفحة عرض الغرف مع رسالة نجاح
        return redirect()->route('appartements.index')->with('success', 'Appartement mis à jour avec succès');
    }

    // حذف الغرفة
    public function destroy($id)
    {
        // البحث عن الغرفة باستخدام المعرف
        $appartement = CreateAppartement::findOrFail($id);

        // حذف الصورة إذا كانت موجودة
        if ($appartement->image && file_exists(public_path($appartement->image))) {
            unlink(public_path($appartement->image));
        }

        // حذف الغرفة من قاعدة البيانات
        $appartement->delete();

        // إعادة التوجيه إلى صفحة عرض الغرف مع رسالة نجاح
        return redirect()->route('appartements.index')->with('success', 'Appartement supprimé avec succès');
    }
}
