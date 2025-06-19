<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenancyAdditionalClauses extends Model
{
    protected $table = 'tenancy_additional_clauses';
    protected $primaryKey = 'tenancy_additional_clauses_id';
    public $timestamps = false;

    protected $fillable = [
        'tenancy_additional_clauses_tenancy',
        'tenancy_additional_clauses_title',
        'tenancy_additional_clauses_text',
        'tenancy_additional_clauses_date_created',
        'tenancy_additional_clauses_date_updated',
        'tenancy_additional_clauses_created_by',
        'tenancy_additional_clauses_updated_by',
    ];

    protected $dates = [
        'tenancy_additional_clauses_date_created',
        'tenancy_additional_clauses_date_updated',
    ];

    /**
     * Get the tenancy that this clause belongs to.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_additional_clauses_tenancy', 'tenancy_id');
    }

    /**
     * Get the employee who created this clause.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_additional_clauses_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this clause.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_additional_clauses_updated_by', 'employee_id');
    }
}