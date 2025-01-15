<?php

namespace App\Http\Controllers;

use App\Models\RoomReservation;
use Illuminate\Http\Request;

class RoomReservationController extends Controller
{
    public function store(Request $request)
    {
        // التحقق من صحة المدخلات
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required|date',
            'heure' => 'required',
            'gens' => 'required|integer',
            'phone' => 'required|string|max:15',
            'room_id' => 'required|exists:rooms,id',
        ]);

        // إنشاء حجز جديد باستخدام البيانات الصحيحة
        RoomReservation::create($validated);

        // إعادة توجيه المستخدم مع رسالة نجاح
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
