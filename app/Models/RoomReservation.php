<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomReservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'date',
        'heure',
        'gens',
        'phone',
    ];
    public function create($id)
{
    $room = Room::findOrFail($id);

    return view('rooms.reserve', compact('room'));
}

}
