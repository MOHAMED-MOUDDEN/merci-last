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
        'room_id',  // يجب إضافة 'room_id' هنا لأنه يتم استخدامه في الطلب
    ];
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

}
