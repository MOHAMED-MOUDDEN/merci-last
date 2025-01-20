<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

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
    // إضافة تحقق للأخطاء
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'stars' => 'required|integer|min:1|max:5',
        'price' => 'required|numeric|min:0',
        'description' => 'nullable|string',
        'additional_info' => 'nullable|string',
        'available' => 'required|boolean',
        'images.*' => 'nullable|image|max:2048',
    ]);

    $room = Room::create([
        'name' => $validated['name'],
        'stars' => $validated['stars'],
        'price' => $validated['price'],
        'description' => $validated['description'] ?? null,
        'additional_info' => $validated['additional_info'] ?? null,
        'available' => $validated['available'],
    ]);

    // رفع الصور إذا كانت موجودة
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $this->uploadRoomImage($room->id, $image);
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
            'available' => 'required|boolean',
            'images.*' => 'image|max:2048',
        ]);

        $room = Room::findOrFail($id);
        $room->update([
            'name' => $validated['name'],
            'stars' => $validated['stars'],
            'price' => $validated['price'],
            'description' => $validated['description'] ?? null,
            'additional_info' => $validated['additional_info'] ?? null,
            'available' => $validated['available'],

        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                try {
                    $uploadedImage = Cloudinary::upload($image->getRealPath(), [
                        'folder' => 'room_images',
                    ]);
                } catch (\Exception $e) {
                    logger()->error('Cloudinary Upload Error: ' . $e->getMessage());
                    return back()->withErrors('Error uploading image: ' . $e->getMessage());
                }
                
                

                RoomImage::create([
                    'room_id' => $room->id,
                    'image_path' => $uploadedImage->getSecurePath(),
                ]);
            }
        }

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }

    public function destroy($id)
    {
        $room = Room::with('images')->findOrFail($id);

        foreach ($room->images as $image) {
            $publicId = basename($image->image_path, '.' . pathinfo($image->image_path, PATHINFO_EXTENSION));
            Cloudinary::destroy($publicId);
            $image->delete();
        }

        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }

    public function show($id)
    {
        $room = Room::with('images')->findOrFail($id);
        $selectedImage = 0;

        return view('user.rooms.show', compact('room', 'selectedImage'));
    }
}
