<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guarantor extends Model
{
    protected $table = 'guarantor';
    protected $primaryKey = 'guarantor_id';
    public $timestamps = false;

    protected $fillable = [
        'guarantor_token',
        'guarantor_title',
        'guarantor_first_name',
        'guarantor_surname',
        'guarantor_email',
        'guarantor_phone_mobile',
        // ...other fields...
    ];

    protected $dates = [
        'guarantor_dob',
        'guarantor_date_created',
        'guarantor_date_updated',
    ];

    /**
     * Get the title of the guarantor.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'guarantor_title', 'title_id');
    }

    /**
     * Get the country of the guarantor.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'guarantor_country', 'country_id');
    }

    /**
     * Get the employee who created the guarantor.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'guarantor_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the guarantor.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'guarantor_updated_by', 'employee_id');
    }

    /**
     * Get the tenancy relationships for the guarantor.
     */
    public function tenancies(): HasMany
    {
        return $this->hasMany(TenancyGuarantors::class, 'tenancy_guarantors_guarantor', 'guarantor_id');
    }

    /**
     * Get the income records for the guarantor.
     */
    public function incomeRecords(): HasMany
    {
        return $this->hasMany(GuarantorIncome::class, 'guarantor_income_guarantor', 'guarantor_id');
    }
}