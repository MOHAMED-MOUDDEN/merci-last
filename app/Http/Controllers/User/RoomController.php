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
        // جلب الغرفة بناءً على الـ ID
        $room = Room::findOrFail($id);

        // حساب الثمن (على سبيل المثال، نستخدم السعر الموجود في خاصية price)
        $total = $room->price;

        // إذا كنت بحاجة إلى إجراء أي تعديلات أخرى على الثمن، يمكنك إضافتها هنا

        // التوجيه إلى الصفحة السابقة مع عرض الثمن في الجلسة
        return redirect()->route('rooms.show', $id)->with('success', 'Room booked successfully!')->with('total', $total);
    }


}
