<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchOpeningHours extends Model
{
    //

    /**
     * Get the Branch associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'branch_id');
    }
}
