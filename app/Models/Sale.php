<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sale extends Model
{
    protected $table = 'sale';
    protected $primaryKey = 'sale_id';
    public $timestamps = false;

    protected $fillable = [
        'sale_property',
        'sale_status',
        'sale_amount',
        'sale_finance',
        'sale_employee_responsible',
        // ...other fields...
    ];

    protected $dates = [
        'sale_date_created',
        'sale_date_updated',
        'sale_date_exchange',
        'sale_date_completion',
    ];

    /**
     * Get the property being sold.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'sale_property', 'property_id');
    }

    /**
     * Get the status of the sale.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(SaleStatus::class, 'sale_status', 'sale_status_id');
    }

    /**
     * Get the finance type for the sale.
     */
    public function finance(): BelongsTo
    {
        return $this->belongsTo(SaleFinance::class, 'sale_finance', 'sale_finance_id');
    }

    /**
     * Get the employee responsible for the sale.
     */
    public function responsibleEmployee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_employee_responsible', 'employee_id');
    }

    /**
     * Get the vendor solicitor company.
     */
    public function vendorSolicitorCompany(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_vendor_solicitor_company', 'directory_id');
    }

    /**
     * Get the vendor mortgage advisor.
     */
    public function vendorMortgageAdvisor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_vendor_mortgage_advisor', 'directory_id');
    }

    /**
     * Get the buyer solicitor company.
     */
    public function buyerSolicitorCompany(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_buyer_solicitor_company', 'directory_id');
    }

    /**
     * Get the buyer mortgage advisor.
     */
    public function buyerMortgageAdvisor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_buyer_mortgage_advisor', 'directory_id');
    }

    /**
     * Get the collapsed reason for the sale.
     */
    public function collapsedReason(): BelongsTo
    {
        return $this->belongsTo(SaleCollapsedReason::class, 'sale_collapsed_reason', 'sale_collapsed_reason_id');
    }

    /**
     * Get the employee who created the sale.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the sale.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_updated_by', 'employee_id');
    }

    /**
     * Get the buyers for the sale.
     */
    public function buyers(): HasMany
    {
        return $this->hasMany(SaleBuyers::class, 'sale_buyers_sale', 'sale_id');
    }

    /**
     * Get the status log for the sale.
     */
    public function statusLog(): HasMany
    {
        return $this->hasMany(SaleLogStatus::class, 'sale_log_status_sale', 'sale_id');
    }

    /**
     * Get the tasks for the sale.
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(SaleTask::class, 'sale_task_sale', 'sale_id');
    }

    /**
     * Get the updates for the sale.
     */
    public function updates(): HasMany
    {
        return $this->hasMany(SaleUpdates::class, 'sale_updates_sale', 'sale_id');
    }
}