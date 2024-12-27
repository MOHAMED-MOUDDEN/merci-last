<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=['id_user','name','email','phone','message'];
    public function user():BelongsTo{
        return $this->belongsTo(User::class,'id_user');
    }
}
