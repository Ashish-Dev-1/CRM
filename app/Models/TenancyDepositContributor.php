<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenancyDepositContributor extends Model
{
    protected $table = 'tenancy_deposit_contributor';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'tenancy_deposit_contributor_title',
        'tenancy_deposit_contributor_first_name',
        'tenancy_deposit_contributor_surname',
        'tenancy_deposit_contributor_amount',
        'tenancy_id',
    ];

    protected $casts = [
        'tenancy_deposit_contributor_title' => 'integer',
        'tenancy_deposit_contributor_amount' => 'decimal:2',
        'tenancy_id' => 'integer',
    ];

    protected $dates = [
        'tenancy_deposit_contributor_date_created',
        'tenancy_deposit_contributor_date_updated',
    ];

    /**
     * Get the tenancy that this deposit contributor belongs to.
     */
    

    /**
     * Get the employee who created this deposit contributor.
     */
    

    /**
     * Get the employee who updated this deposit contributor.
     */
    

    /**
     * Get the Title associated with this record.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'tenancy_deposit_contributor_title', 'title_id');
    }

    /**
     * Get the Tenancy associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }
}