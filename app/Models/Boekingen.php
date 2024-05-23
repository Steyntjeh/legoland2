<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boekingen extends Model
{
    use HasFactory;

    protected $table = "boekingen";
    protected $fillable = [
        'naam', 'email', 'telefoonnummer', 'kamertype', 'aankomst', 'vertrek', 'aantalPersonen'
    ];
}
