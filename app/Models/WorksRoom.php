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
        'works_room_name',
        'works_room_description',
    ];

    /**
     * Get the works for this room.
     */
    public function works(): HasMany
    {
        return $this->hasMany(Works::class, 'works_room', 'works_room_id');
    }
}