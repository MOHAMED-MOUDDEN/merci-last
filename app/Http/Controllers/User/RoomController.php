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
        $room = Room::with('images')->findOrFail($id);
        return view('user.rooms.show', compact('room'));
    }
}
