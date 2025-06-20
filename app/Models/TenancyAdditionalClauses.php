<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenancyAdditionalClauses extends Model
{
    protected $table = 'tenancy_additional_clauses';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'tenancy_additional_clauses_description',
        'tenancy_id',
    ];

    protected $casts = [
        'tenancy_id' => 'integer',
    ];

    protected $dates = [
        'tenancy_additional_clauses_date_created',
        'tenancy_additional_clauses_date_updated',
    ];

    /**
     * Get the tenancy that this clause belongs to.
     */
    

    /**
     * Get the employee who created this clause.
     */
    

    /**
     * Get the employee who updated this clause.
     */
    

    /**
     * Get the Tenancy associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }
}