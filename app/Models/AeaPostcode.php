<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AeaPostcode extends Model
{
    protected $table = 'aea_postcodes';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'post_code',
        'lat',
        'lng'
    ];

    /**
     * Get properties with this postcode.
     */
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_postcode', 'post_code');
    }
}