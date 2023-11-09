<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Property extends Model
{
    //use HasFactory;
    protected $table = 'property';//image es como se llama la tabla en la db de mysql

    protected $primaryKey = 'id';

    protected $fillable = [
        'type_property_id',
        'status_id',
        'operation_id',
        'adress',
        'price',
        'adress_number',
        'dimension',
        'room_number',
        'bathroom_number',
        'yard',
        'pool',
        'garage',
        'gas',
        'light',
        'expenses',
        'kitchen',
        'dining_room',
        'description',
        'stand_out',
        'created_at',
        'updated_at'
    ];

    //One To One
    public function operation(): BelongsTo
    {
        return $this->belongsTo(Operation::class, 'operation_id', 'id');
    }

    //One To One
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    //One To One
    public function tipeOfProperty(): BelongsTo
    {
        return $this->belongsTo(tipeOfProperty::class, 'type_property_id', 'id');
    }
    //One To One
    public function image(): BelongsTo
    {
        return $this->belongsTo(tipeOfProperty::class, 'property_id', 'id');
    }
}
