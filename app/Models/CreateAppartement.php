<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateAppartement extends Model
{
    use HasFactory;
    protected $table = 'appartements';

    protected $fillable = [
        'nom',
        'prenom',
        'description',
        'image',
        'prix',
        'etoiles',
        'extra_info',
    ];

}
