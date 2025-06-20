<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocalAuthorityWard extends Model
{
    //

    /**
     * Get the LocalAuthority associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(LocalAuthority::class, 'local_authority_id', 'local_authority_id');
    }
}
