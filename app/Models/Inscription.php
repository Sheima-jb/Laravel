<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    // Les attributs qui peuvent être remplis
    protected $fillable = [
        'nom',
        'prenom',
        'dateNaissance',
        'adresse',
        'tel',
    ];
}
