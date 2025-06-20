<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Applicant extends Model
{
    protected $table = 'applicant';
    protected $primaryKey = 'applicant_id';
    public $timestamps = false;

    protected $fillable = [
        'applicant_token',
        'applicant_type',
        'applicant_sub_type',
        'applicant_title',
        'applicant_first_name',
        'applicant_surname',
        'applicant_company_name',
        'applicant_company_trading_name',
        'applicant_email',
        'applicant_phone_home',
        'applicant_phone_work',
        'applicant_phone_mobile',
        'applicant_fax',
        'applicant_property_number_name',
        'applicant_apartment_number_name',
        'applicant_address_line_1',
        'applicant_address_line_2',
        'applicant_suburb',
        'applicant_town_city',
        'applicant_postcode',
        'applicant_country',
        'applicant_branch',
        'applicant_purchase_finance',
        'applicant_purchase_type',
        'applicant_purchase_chain',
        'applicant_purchase_chain_status',
        'applicant_purchase_chain_notes',
        'applicant_ftb',
        'applicant_referral_solicitor',
        'applicant_referral_solicitor_notes',
        'applicant_referral_mortgage',
        'applicant_referral_mortgage_notes',
        'applicant_referral_valuation',
        'applicant_referral_valuation_notes',
        'applicant_cash_available',
        'applicant_mortgage_available',
        'applicant_pof_date_updated',
        'applicant_source',
        'applicant_lead_source',
        'applicant_lead_source_notes',
        'applicant_referral_valuation_closed',
        'applicant_referral_valuation_next_review_date',
        'applicant_referral_valuation_next_review_notes',
        'applicant_referral_mortgage_closed',
        'applicant_referral_mortgage_next_review_date',
        'applicant_referral_mortgage_next_review_notes',
        'applicant_rightmove_email_id',
        'applicant_negotiator',
        'applicant_date_created',
        'applicant_date_updated',
        'applicant_created_by',
        'applicant_updated_by',
    ];

    protected $dates = [
        'applicant_pof_date_updated',
        'applicant_referral_valuation_next_review_date',
        'applicant_referral_mortgage_next_review_date',
        'applicant_date_created',
        'applicant_date_updated',
    ];

    /**
     * Get the title for this applicant.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'applicant_title', 'title_id');
    }

    /**
     * Get the country for this applicant.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'applicant_country', 'country_id');
    }

    /**
     * Get the branch for this applicant.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'applicant_branch', 'branch_id');
    }

    /**
     * Get the negotiator for this applicant.
     */
    public function negotiator(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_negotiator', 'employee_id');
    }

    /**
     * Get the employee who created this applicant.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this applicant.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_updated_by', 'employee_id');
    }

    /**
     * Get the lead source for this applicant.
     */
    public function leadSource(): BelongsTo
    {
        return $this->belongsTo(ApplicantLeadSource::class, 'applicant_lead_source', 'applicant_lead_source_id');
    }

    /**
     * Get the chain status for this applicant.
     */
    public function chainStatus(): BelongsTo
    {
        return $this->belongsTo(ApplicantChainStatus::class, 'applicant_purchase_chain_status', 'applicant_chain_status_id');
    }

    /**
     * Get the finance type for this applicant.
     */
    public function financeType(): BelongsTo
    {
        return $this->belongsTo(SaleFinance::class, 'applicant_purchase_finance', 'sale_finance_id');
    }

    /**
     * Get the requirements for this applicant.
     */
    public function requirements(): HasOne
    {
        return $this->hasOne(ApplicantRequirement::class, 'ar_applicant', 'applicant_id');
    }

    /**
     * Get the updates for this applicant.
     */
    public function updates(): HasMany
    {
        return $this->hasMany(ApplicantUpdates::class, 'applicant_updates_applicant', 'applicant_id');
    }

    /**
     * Get the calendar events for this applicant.
     */
    public function calendarEvents(): HasMany
    {
        return $this->hasMany(CalendarEvent::class, 'calendar_event_applicant', 'applicant_id');
    }

    /**
     * Get the offer sale applicants associated with this applicant.
     */
    public function offerSaleApplicants(): HasMany
    {
        return $this->hasMany(PropertyOfferSaleApplicants::class, 'property_offer_sale_applicants_applicant', 'applicant_id');
    }

    /**
     * Get the interested properties for this applicant.
     */
    public function interestedProperties(): HasMany
    {
        return $this->hasMany(InterestedApplicant::class, 'interested_applicant_applicant', 'applicant_id');
    }

    /**
     * Get the applications submitted by this applicant.
     */
    public function applications(): HasMany
    {
        return $this->hasMany(ApplicationApplicant::class, 'application_applicant_applicant', 'applicant_id');
    }

    /**
     * Get the full name of the applicant.
     */
    public function getFullNameAttribute(): string
    {
        if (!empty($this->applicant_company_name)) {
            return $this->applicant_company_name;
        }

        return trim($this->applicant_first_name . ' ' . $this->applicant_surname);
    }
}