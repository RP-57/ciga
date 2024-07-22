<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // Non è necessario specificare il nome della tabella se il nome del modello è quello della tabella con una s finale
    protected $table = 'categories'; 
}
