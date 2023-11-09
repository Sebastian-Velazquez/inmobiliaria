<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Operation extends Model
{
    //use HasFactory;
    protected $table = 'operations'; // Nombre de la tabla en la base de datos
    
    //One To One
    public function property(): HasOne
    {
        return $this->hasOne(Property::class);
    }
}
