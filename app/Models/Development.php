<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Development extends Model
{
    protected $table = 'development';
    public $timestamps = false;

        protected $fillable = [
        'development_token',
        'development_branch',
        'development_name',
        'development_number_name',
        'development_address_line_1',
        'development_address_line_2',
        'development_suburb',
        'development_town_city',
        'development_postcode',
        'development_country',
        'development_default_gsc_contractor',
        'development_default_epc_contractor',
        'development_default_electrical_contractor',
        'development_default_pat_contractor',
        'development_default_fire_alarm_contractor',
        'development_default_emergency_lighting_contractor',
        'development_type',
        'development_requires_gas_cert',
        'development_requires_electric_cert',
        'development_requires_fire_alarm_cert',
        'development_requires_emergency_lighting_cert',
        'development_requires_fire_risk_assessment',
        'development_works_notes',
        'development_window_cleaning_public',
        'development_window_cleaning_private',
        'development_grounds_maintenance_public',
        'development_grounds_maintenance_private',
        'development_cleaning_public',
        'development_cleaning_private',
        'development_heating_public',
        'development_heating_private',
        'development_internet_public',
        'development_internet_private',
        'development_fire_alarm_public',
        'development_fire_alarm_private',
        'development_waste_public',
        'development_waste_private',
        'development_general_public',
        'development_general_private',
        'development_status',
    ];

    protected $casts = [
        'development_branch' => 'integer',
        'development_country' => 'integer',
        'development_default_gsc_contractor' => 'integer',
        'development_default_epc_contractor' => 'integer',
        'development_default_electrical_contractor' => 'integer',
        'development_default_pat_contractor' => 'integer',
        'development_default_fire_alarm_contractor' => 'integer',
        'development_default_emergency_lighting_contractor' => 'integer',
        'development_type' => 'integer',
        'development_requires_gas_cert' => 'integer',
        'development_requires_electric_cert' => 'integer',
        'development_requires_fire_alarm_cert' => 'integer',
        'development_requires_emergency_lighting_cert' => 'integer',
        'development_requires_fire_risk_assessment' => 'integer',
        'development_status' => 'integer',
    ];

    /**
     * Get the branch that the development belongs to.
     */
    

    /**
     * Get the country of the development.
     */
    

    /**
     * Get the type of the development.
     */
    

    /**
     * Get the default gas safety certificate contractor of the development.
     */
    

    /**
     * Get the default EPC contractor of the development.
     */
    

    /**
     * Get the default electrical contractor of the development.
     */
    

    /**
     * Get the default PAT contractor of the development.
     */
    

    /**
     * Get the default fire alarm contractor of the development.
     */
    

    /**
     * Get the default emergency lighting contractor of the development.
     */
    

    /**
     * Get the properties for the development.
     */
    

    /**
     * Get the certificates for the development.
     */
    

    /**
     * Get the alarm codes for the development.
     */
    

    /**
     * Get the updates for the development.
     */
    

    /**
     * Get the Branch associated with this record.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'development_branch', 'branch_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'development_country', 'country_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function contractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'development_default_gsc_contractor', 'directory_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function defaultGscContractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'development_default_epc_contractor', 'directory_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function defaultEpcContractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'development_default_electrical_contractor', 'directory_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function defaultElectricalContractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'development_default_pat_contractor', 'directory_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function defaultFireAlarmContractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'development_default_fire_alarm_contractor', 'directory_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function defaultEmergencyLightingContractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'development_default_emergency_lighting_contractor', 'directory_id');
    }

    /**
     * Get the DevelopmentType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(DevelopmentType::class, 'development_type', 'development_type_id');
    }
}