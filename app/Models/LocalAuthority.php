<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocalAuthority extends Model
{
    //

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'local_authority_country', 'country_id');
    }
}
