<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'referral_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'referral_employee', 'employee_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'referral_property', 'property_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'referral_updated_by', 'employee_id');
    }

    /**
     * Get the Valuation associated with this record.
     */
    public function valuation(): BelongsTo
    {
        return $this->belongsTo(Valuation::class, 'referral_valuation', 'valuation_id');
    }

    /**
     * Get the ReferralType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(ReferralType::class, 'referral_type', 'referral_type_id');
    }

    /**
     * Get the ReferralSalePurchase associated with this record.
     */
    public function purchase(): BelongsTo
    {
        return $this->belongsTo(ReferralSalePurchase::class, 'referral_sale_purchase', 'referral_sale_purchase_id');
    }

    /**
     * Get the CustomerType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(CustomerType::class, 'referral_customer_type', 'customer_type_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'referral_directory_company', 'directory_id');
    }

    /**
     * Get the ReferralStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(ReferralStatus::class, 'referral_status', 'referral_status_id');
    }
}
