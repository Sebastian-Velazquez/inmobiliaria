<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class City extends Model
{
    //use HasFactory;
    protected $table = 'cities'; 

    public function city(): HasOne
    {
        return $this->hasOne(city::class);
    }
}
