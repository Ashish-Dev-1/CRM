<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocalAuthorityBranchReference extends Model
{
    //

    /**
     * Get the LocalAuthority associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(LocalAuthority::class, 'local_authority_id', 'local_authority_id');
    }

    /**
     * Get the Branch associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'branch_id');
    }
}
