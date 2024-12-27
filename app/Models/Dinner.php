<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinner extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'description','prix', 'image'];
    public function getFeaturedAttribute($image){
        return assert($image);
 }
}
