<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

    /**
     * Get the AccountsVatRate associated with this record.
     */
    public function rate(): BelongsTo
    {
        return $this->belongsTo(AccountsVatRate::class, 'company_default_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'company_reg_office_country', 'country_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'company_country', 'country_id');
    }
}
