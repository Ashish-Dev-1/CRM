<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suburb extends Model
{
    //

    /**
     * Get the Branch associated with this record.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'suburb_branch', 'branch_id');
    }
}
