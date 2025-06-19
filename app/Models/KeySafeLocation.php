<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KeySafeLocation extends Model
{
    protected $table = 'key_safe_location';
    protected $primaryKey = 'key_safe_location_id';
    public $timestamps = false;

    protected $fillable = [
        'key_safe_location_name',
        'key_safe_location_description',
    ];

    /**
     * Get the key safes at this location.
     */
    public function keySafes(): HasMany
    {
        return $this->hasMany(KeySafe::class, 'key_safe_location', 'key_safe_location_id');
    }
}