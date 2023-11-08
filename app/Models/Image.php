<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    //use HasFactory;
    protected $table = 'image';//image es como se llama la tabla en la db de mysql
    //Campo clave primaria
    protected $primaryKey = 'id';
    //Campos
    protected $fillable = [
        'id_property',
        'image_path',
        'created_at',
        'updated_at'
    ];
    //Relarion One To Many | de uno a  NO
    //One To Many (Inverse) / Belongs To
    public function property(): BelongsTo {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
}
