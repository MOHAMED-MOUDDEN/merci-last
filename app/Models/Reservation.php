<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $dates=['deleted_at'];
    // protected $fillable=['id_user','date','heure','gens','nom','phone','email'];
    protected $fillable=['date','heure','gens','nom','phone','email'];

//    public function user():BelongsTo{
//     return $this->belongsTo(User::class,'id_user');
// }

}
