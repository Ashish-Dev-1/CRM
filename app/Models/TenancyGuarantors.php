<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenancyGuarantors extends Model
{
    protected $table = 'tenancy_guarantors';
    
    public $timestamps = false;

        protected $fillable = [
        'guarantor_id',
        'tenancy_id',
    ];

    protected $casts = [
        'guarantor_id' => 'integer',
        'tenancy_id' => 'integer',
    ];

    protected $dates = [
        'tenancy_guarantors_date_created',
        'tenancy_guarantors_date_updated',
    ];

    /**
     * Get the tenancy that the guarantor is associated with.
     */

    /**
     * Get the guarantor associated with the tenancy.
     */

    /**
     * Get the employee who created the tenancy guarantor record.
     */

    /**
     * Get the employee who updated the tenancy guarantor record.
     */

    /**
     * Get the Guarantor associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Guarantor::class, 'guarantor_id', 'guarantor_id');
    }

    /**
     * Get the Tenancy associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }
}