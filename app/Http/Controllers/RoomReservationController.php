<?php
namespace App\Http\Controllers;

use App\Models\RoomReservation;
use Illuminate\Http\Request;

class RoomReservationController extends Controller
{
    public function store(Request $request)
{
    // التحقق من البيانات المدخلة
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'email' => 'required|email',
        'date' => 'required|date',
        'heure' => 'required|string',
        'gens' => 'required|integer',
        'phone' => 'required|string|max:15',
        'room_id' => 'required|exists:rooms,id',
        'price' => 'required|numeric',  // تأكد من أن السعر رقم
    ]);

    // إنشاء الحجز مع الثمن
    RoomReservation::create([
        'nom' => $request->nom,
        'email' => $request->email,
        'date' => $request->date,
        'heure' => $request->heure,
        'gens' => $request->gens,
        'phone' => $request->phone,
        'room_id' => $request->room_id,
        'price' => $request->price,  // تخزين السعر
    ]);

    return redirect()->route('rooms.index')->with('success', 'تم حجز الغرفة بنجاح!');
}

  
public function create($id)
{
    // جلب بيانات الغرفة باستخدام معرّف الغرفة
    $room = \App\Models\Room::findOrFail($id);

    // عرض صفحة الحجز مع بيانات الغرفة
    return view('user.rooms.reserve', compact('room'));
}

}
