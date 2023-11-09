<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TypeOfProperty extends Model
{
   // use HasFactory;
   //One To One
   public function property(): HasOne
   {
       return $this->hasOne(Property::class);
   }
}
