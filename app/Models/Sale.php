<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sale extends Model
{
    protected $table = 'sale';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'sale_offer_id',
        'sale_property',
        'sale_agreed_date',
        'sale_agreed_price',
        'sale_purchase_finance',
        'sale_notes',
        'sale_vendor_solicitor_company_intermediary',
        'sale_vendor_solicitor_company',
        'sale_vendor_solicitor_company_individual',
        'sale_vendor_mortgage_advisor',
        'sale_vendor_mortgage_advisor_individual',
        'sale_buyer_solicitor_company_intermediary',
        'sale_buyer_solicitor_company',
        'sale_buyer_solicitor_company_individual',
        'sale_buyer_mortgage_advisor',
        'sale_buyer_mortgage_advisor_individual',
        'sale_status',
        'sale_target_exchange_date',
        'sale_target_completion_date',
        'sale_collapsed_reason',
        'sale_collapsed_reason_id',
        'sale_viewings_status',
        'sale_employee_responsible',
        'sale_next_review_date',
        'sale_next_review_notes',
        'sale_media_utilities',
        'sale_commission_completion_payment',
        'sale_commission_completion_payment_type',
        'sale_commission_completion_date_paid',
        'sale_completion_date',
        'sale_invoice_check_override',
        'sale_auto_progression_chase_vendor',
        'sale_auto_progression_chase_buyer',
        'sale_last_update',
        'sale_created_by',
        'sale_updated_by',
        'sale_date_created',
        'sale_date_updated',
    ];

    protected $casts = [
        'sale_offer_id' => 'integer',
        'sale_property' => 'integer',
        'sale_agreed_date' => 'date',
        'sale_agreed_price' => 'decimal:2',
        'sale_purchase_finance' => 'integer',
        'sale_vendor_solicitor_company_intermediary' => 'integer',
        'sale_vendor_solicitor_company' => 'integer',
        'sale_vendor_solicitor_company_individual' => 'integer',
        'sale_vendor_mortgage_advisor' => 'integer',
        'sale_vendor_mortgage_advisor_individual' => 'integer',
        'sale_buyer_solicitor_company_intermediary' => 'integer',
        'sale_buyer_solicitor_company' => 'integer',
        'sale_buyer_solicitor_company_individual' => 'integer',
        'sale_buyer_mortgage_advisor' => 'integer',
        'sale_buyer_mortgage_advisor_individual' => 'integer',
        'sale_status' => 'integer',
        'sale_target_exchange_date' => 'date',
        'sale_target_completion_date' => 'date',
        'sale_collapsed_reason_id' => 'integer',
        'sale_viewings_status' => 'integer',
        'sale_employee_responsible' => 'integer',
        'sale_next_review_date' => 'date',
        'sale_media_utilities' => 'boolean',
        'sale_commission_completion_payment' => 'decimal:2',
        'sale_commission_completion_payment_type' => 'integer',
        'sale_commission_completion_date_paid' => 'date',
        'sale_completion_date' => 'date',
        'sale_invoice_check_override' => 'integer',
        'sale_auto_progression_chase_vendor' => 'integer',
        'sale_auto_progression_chase_buyer' => 'integer',
        'sale_last_update' => 'datetime',
        'sale_created_by' => 'integer',
        'sale_updated_by' => 'integer',
        'sale_date_created' => 'datetime',
        'sale_date_updated' => 'datetime',
    ];

        protected $dates = [
        'sale_agreed_date',
        'sale_target_exchange_date',
        'sale_target_completion_date',
        'sale_next_review_date',
        'sale_commission_completion_date_paid',
        'sale_completion_date',
        'sale_last_update',
        'sale_date_created',
        'sale_date_updated',
    ];

    /**
     * Get the property being sold.
     */
    

    /**
     * Get the status of the sale.
     */
    

    /**
     * Get the finance type for the sale.
     */
    

    /**
     * Get the employee responsible for the sale.
     */
    

    /**
     * Get the vendor solicitor company.
     */
    

    /**
     * Get the vendor mortgage advisor.
     */
    

    /**
     * Get the buyer solicitor company.
     */
    

    /**
     * Get the buyer mortgage advisor.
     */
    

    /**
     * Get the collapsed reason for the sale.
     */
    

    /**
     * Get the employee who created the sale.
     */
    

    /**
     * Get the employee who updated the sale.
     */
    

    /**
     * Get the buyers for the sale.
     */
    

    /**
     * Get the status log for the sale.
     */
    

    /**
     * Get the tasks for the sale.
     */
    

    /**
     * Get the updates for the sale.
     */
    

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function responsible(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_employee_responsible', 'employee_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'sale_property', 'property_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_updated_by', 'employee_id');
    }

    /**
     * Get the PropertyOfferSale associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSale::class, 'sale_offer_id', 'property_offer_sale_id');
    }

    /**
     * Get the SaleFinance associated with this record.
     */
    public function finance(): BelongsTo
    {
        return $this->belongsTo(SaleFinance::class, 'sale_purchase_finance', 'sale_finance_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function intermediary(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_vendor_solicitor_company_intermediary', 'directory_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_vendor_solicitor_company', 'directory_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function advisor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_vendor_mortgage_advisor', 'directory_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function intermediary(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_buyer_solicitor_company_intermediary', 'directory_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_buyer_solicitor_company', 'directory_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function advisor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'sale_buyer_mortgage_advisor', 'directory_id');
    }

    /**
     * Get the DirectoryIndividual associated with this record.
     */
    public function individual(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'sale_vendor_solicitor_company_individual', 'directory_individual_id');
    }

    /**
     * Get the DirectoryIndividual associated with this record.
     */
    public function individual(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'sale_vendor_mortgage_advisor_individual', 'directory_individual_id');
    }

    /**
     * Get the DirectoryIndividual associated with this record.
     */
    public function individual(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'sale_buyer_solicitor_company_individual', 'directory_individual_id');
    }

    /**
     * Get the DirectoryIndividual associated with this record.
     */
    public function individual(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'sale_buyer_mortgage_advisor_individual', 'directory_individual_id');
    }

    /**
     * Get the SaleStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(SaleStatus::class, 'sale_status', 'sale_status_id');
    }

    /**
     * Get the SaleCollapsedReason associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(SaleCollapsedReason::class, 'sale_collapsed_reason_id', 'sale_collapsed_reason_id');
    }

    /**
     * Get the CommissionType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(CommissionType::class, 'sale_commission_completion_payment_type', 'commission_type_id');
    }
}