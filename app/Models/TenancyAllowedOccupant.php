<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenancyAllowedOccupant extends Model
{
    protected $table = 'tenancy_allowed_occupant';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'tenancy_id',
        'tenancy_allowed_occupant_title',
        'tenancy_allowed_occupant_first_name',
        'tenancy_allowed_occupant_surname',
        'tenancy_allowed_occupant_phone_number',
        'tenancy_allowed_occupant_email_address',
    ];

    protected $casts = [
        'tenancy_id' => 'integer',
        'tenancy_allowed_occupant_title' => 'integer',
    ];

    protected $dates = [
        'tenancy_allowed_occupant_date_created',
        'tenancy_allowed_occupant_date_updated',
    ];

    /**
     * Get the tenancy that this occupant belongs to.
     */
    

    /**
     * Get the employee who created this occupant.
     */
    

    /**
     * Get the employee who updated this occupant.
     */
    

    /**
     * Get the Title associated with this record.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'tenancy_allowed_occupant_title', 'title_id');
    }

    /**
     * Get the Tenancy associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }
}