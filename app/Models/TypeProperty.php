<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TypeProperty extends Model
{
   // use HasFactory;
    protected $table = 'type_properties';
    
    public function property(): HasOne
    {
        return $this->hasOne(Property::class);
    }
}
