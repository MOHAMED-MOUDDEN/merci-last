<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('images')->get();
        return view('admin.rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('admin.rooms.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'stars' => 'required|integer|min:1|max:5',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'additional_info' => 'nullable|string',
            'images.*' => 'image|max:2048', // الصور يجب أن تكون أقل من 2 ميجابايت
        ]);

        // إنشاء الغرفة
        $room = Room::create([
            'name' => $validated['name'],
            'stars' => $validated['stars'],
            'price' => $validated['price'],
            'description' => $validated['description'] ?? null,
            'additional_info' => $validated['additional_info'] ?? null,
        ]);

        // رفع الصور إن وجدت
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = 'room_images/' . $image->getClientOriginalName();
                $image->move(public_path('room_images'), $image->getClientOriginalName());
                RoomImage::create([
                    'room_id' => $room->id,
                    'image_path' => $path,
                ]);
            }
        }

        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
    }

    public function edit($id)
    {
        $room = Room::with('images')->findOrFail($id);
        return view('admin.rooms.edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'stars' => 'required|integer|min:1|max:5',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'additional_info' => 'nullable|string',
            'images.*' => 'image|max:2048',
        ]);

        // تحديث الغرفة
        $room = Room::findOrFail($id);
        $room->update([
            'name' => $validated['name'],
            'stars' => $validated['stars'],
            'price' => $validated['price'],
            'description' => $validated['description'] ?? null,
            'additional_info' => $validated['additional_info'] ?? null,
        ]);

        // رفع الصور الجديدة إن وجدت
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = 'room_images/' . $image->getClientOriginalName();
                $image->move(public_path('room_images'), $image->getClientOriginalName());
                RoomImage::create([
                    'room_id' => $room->id,
                    'image_path' => $path,
                ]);
            }
        }

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);

        // حذف الصور المرتبطة
        foreach ($room->images as $image) {
            if (file_exists(public_path($image->image_path))) {
                unlink(public_path($image->image_path));
            }
            $image->delete();
        }

        // حذف الغرفة
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }
}
