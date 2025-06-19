<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Development extends Model
{
    protected $table = 'development';
    protected $primaryKey = 'development_id';
    public $timestamps = false;

    protected $fillable = [
        'development_token',
        'development_branch',
        'development_name',
        'development_number_name',
        // ...other fields...
    ];

    /**
     * Get the branch that the development belongs to.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'development_branch', 'branch_id');
    }

    /**
     * Get the country of the development.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'development_country', 'country_id');
    }

    /**
     * Get the type of the development.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(DevelopmentType::class, 'development_type', 'development_type_id');
    }

    /**
     * Get the default gas safety certificate contractor of the development.
     */
    public function defaultGscContractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'development_default_gsc_contractor', 'directory_id');
    }

    /**
     * Get the default EPC contractor of the development.
     */
    public function defaultEpcContractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'development_default_epc_contractor', 'directory_id');
    }

    /**
     * Get the default electrical contractor of the development.
     */
    public function defaultElectricalContractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'development_default_electrical_contractor', 'directory_id');
    }

    /**
     * Get the default PAT contractor of the development.
     */
    public function defaultPatContractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'development_default_pat_contractor', 'directory_id');
    }

    /**
     * Get the default fire alarm contractor of the development.
     */
    public function defaultFireAlarmContractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'development_default_fire_alarm_contractor', 'directory_id');
    }

    /**
     * Get the default emergency lighting contractor of the development.
     */
    public function defaultEmergencyLightingContractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'development_default_emergency_lighting_contractor', 'directory_id');
    }

    /**
     * Get the properties for the development.
     */
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_development', 'development_id');
    }

    /**
     * Get the certificates for the development.
     */
    public function certificates(): HasMany
    {
        return $this->hasMany(CertificateDevelopment::class, 'certificate_development', 'development_id');
    }

    /**
     * Get the alarm codes for the development.
     */
    public function alarmCodes(): HasMany
    {
        return $this->hasMany(AlarmCodeDevelopment::class, 'alarm_code_development', 'development_id');
    }

    /**
     * Get the updates for the development.
     */
    public function updates(): HasMany
    {
        return $this->hasMany(DevelopmentUpdates::class, 'development_updates_development', 'development_id');
    }
}