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
            'images.*' => 'image|max:2048'
        ]);

        $room = Room::create($validated);

        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('room_images', 'public');
                RoomImage::create(['room_id' => $room->id, 'image_path' => $path]);
            }
        }

        return redirect()->route('admin.rooms.index')->with('success', 'Room created successfully.');
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
            'images.*' => 'image|max:2048'
        ]);

        $room = Room::findOrFail($id);
        $room->update($validated);

        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('room_images', 'public');
                RoomImage::create(['room_id' => $room->id, 'image_path' => $path]);
            }
        }

        return redirect()->route('admin.rooms.index')->with('success', 'Room updated successfully.');
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->route('admin.rooms.index')->with('success', 'Room deleted successfully.');
    }
}
