<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['image','titre','id_user','id_category','description'];
        public function user():BelongsTo{
        return $this->belongsTo(User::class,'id_user');
    }
        public function category():BelongsTo{
        return $this->belongsTo(Category::class,'id_category');
    }
        public function comments():HasMany{
        return $this->hasMany(Comment::class,'id_comment');
    }

}

