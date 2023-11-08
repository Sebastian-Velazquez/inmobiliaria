<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Operation extends Model
{
    //use HasFactory;
    //One To One
    protected $table = 'operation'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id'; // Nombre de la columna de la clave primaria

    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];
}
