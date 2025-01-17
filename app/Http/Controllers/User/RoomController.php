<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('images')->get();
        return view('user.rooms.index', compact('rooms'));
    }
    public function show($id)
    {
        // جلب الغرفة مع الصور فقط
        $room = Room::with('images')->findOrFail($id);
    
        // قائمة المرافق يدوياً
        $amenities = [
            ['text' => 'Wi-Fi'],
            ['text' => 'Air Conditioning'],
            ['text' => 'Breakfast Included'],
            // أضف المزيد من المرافق هنا حسب الحاجة
        ];
    
        // تعيين الصورة المختارة افتراضيًا
        $selectedImage = 0;
    
        // تمرير الغرفة والمرافق إلى العرض
        return view('user.rooms.show', compact('room', 'selectedImage', 'amenities'));
    }
    public function book($id)
    {
        // هنا يمكنك إضافة المنطق لحجز الغرفة، مثل إضافة الحجز إلى قاعدة البيانات
        $room = Room::findOrFail($id);
        
        // افتراضًا أن الحجز تم بنجاح
        return redirect()->route('rooms.show', $id)->with('success', 'Room booked successfully!');
    }
        
}
