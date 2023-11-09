<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    //use HasFactory;
    protected $table = 'images';//image es como se llama la tabla en la db de mysql
    //Campo clave primaria
    //protected $primaryKey = 'id';
    //
    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'updated_date';

    //Relarion One To Many | de uno a  NO
    //One To Many (Inverse) / Belongs To
    public function property(): BelongsTo {
        return $this->belongsTo(Property::class);
    }
}
