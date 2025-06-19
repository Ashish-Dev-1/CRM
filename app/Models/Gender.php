<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    protected $table = 'gender';
    protected $primaryKey = 'gender_id';
    public $timestamps = false;

    protected $fillable = [
        'gender_name',
        'gender_description',
    ];

    /**
     * Get the property room lettings that prefer this gender.
     */
    public function propertyRoomLettings(): HasMany
    {
        return $this->hasMany(PropertyRoomLetting::class, 'property_room_letting_preferred_gender', 'gender_id');
    }
}