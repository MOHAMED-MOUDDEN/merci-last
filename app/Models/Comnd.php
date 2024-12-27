<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comnd extends Model
{
    use HasFactory;
    protected $fillable=['nom', 'prenom', 'email', 'phone', 'adresse', 'commande', 'oid', 'Pmethod', 'state', 'prix', 'notes', 'Mlivraison'];

    protected $table = 'comnds';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'oid';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;


    protected $keyType = 'string';
}
