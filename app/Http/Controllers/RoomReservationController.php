<?php

namespace App\Http\Controllers;

use App\Models\RoomReservation;
use Illuminate\Http\Request;

class RoomReservationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required|date',
            'heure' => 'required',
            'gens' => 'required|integer',
            'phone' => 'required|string|max:15',
            'room_id' => 'required|exists:rooms,id',
        ]);

        RoomReservation::create($validated);

        return redirect()->route('rooms.index')->with('success', 'تم حجز الغرفة بنجاح!');
    }
    public function create($id)
    {
        $room = \App\Models\Room::findOrFail($id); // جلب بيانات الغرفة أو إرجاع خطأ إذا لم يتم العثور عليها
        return view('user.rooms.reserve', compact('room'));
    }



}
