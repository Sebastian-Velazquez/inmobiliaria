<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Status extends Model
{
    //use HasFactory;
    protected $table = 'status'; 

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];
}
