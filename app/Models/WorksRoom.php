<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorksRoom extends Model
{
    protected $table = 'works_room';
    protected $primaryKey = 'works_room_id';
    public $timestamps = false;

        protected $fillable = [
        'works_room_id',
        'works_room_name',
        'works_room_sort',
    ];

    protected $casts = [
        'works_room_sort' => 'integer',
    ];

    /**
     * Get the works for this room.
     */
    
}