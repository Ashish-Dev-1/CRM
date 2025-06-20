<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleBuyers extends Model
{
    //

    /**
     * Get the Buyer associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Buyer::class, 'buyer_id', 'buyer_id');
    }

    /**
     * Get the Sale associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Sale::class, 'sale_id', 'sale_id');
    }
}
