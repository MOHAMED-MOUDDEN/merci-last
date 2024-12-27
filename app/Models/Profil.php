<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profil extends Model
{
    use HasFactory;
    protected $fillable=['image','facebook','insta','bio','id_user','adresse','phone','genre'];
    public function user():BelongsTo{
        return $this->belongsTo(User::class,'id_user');
    }

}
