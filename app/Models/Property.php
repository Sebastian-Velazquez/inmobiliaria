<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    //use HasFactory;
    protected $table = 'properties';//image es como se llama la tabla en la db de mysql

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
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
    public function operations(): BelongsTo
    {
        return $this->belongsTo(Operation::class, 'operation_id'); //IMPORTANTE: , 'operation_id'
    }

    //One To One
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class,);
    }

    /* public function type_properties()
    {
        return $this->hasMany(TypeProperty::class);
    } */
    //One To One
    public function type_properties(): BelongsTo { //IMPORTANTE: EL NOMBRE DE LA FUNCION DEBE SER IGUAL AL NOMBE DE LA TABLA RELACIONADA
        return $this->belongsTo(TypeProperty::class, 'type_property_id');
    }

    //One To Many inverso
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    } 
}
