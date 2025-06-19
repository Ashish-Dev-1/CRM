<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Property extends Model
{
    protected $table = 'property';
    protected $primaryKey = 'property_id';
    public $timestamps = false;

    protected $fillable = [
        // Add your fillable fields here
    ];

    /**
     * Get the branch that the property belongs to.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'property_branch', 'branch_id');
    }

    /**
     * Get the category of the property.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(PropertyCategory::class, 'property_category', 'property_category_id');
    }

    /**
     * Get the type of the property.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class, 'property_type', 'property_type_id');
    }

    /**
     * Get the country of the property.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'property_country', 'country_id');
    }

    /**
     * Get the status of the property.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(PropertyStatus::class, 'property_status', 'property_status_id');
    }

    /**
     * Get the development of the property.
     */
    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'property_development', 'development_id');
    }

    /**
     * Get the accessibility features of the property.
     */
    public function accessibilityFeatures(): BelongsToMany
    {
        return $this->belongsToMany(
            PropertyAccessibility::class,
            'property_to_accessibility',
            'property_id',
            'property_accessibility_id'
        );
    }

    /**
     * Get the appliances of the property.
     */
    public function appliances(): BelongsToMany
    {
        return $this->belongsToMany(
            PropertyAppliances::class,
            'property_to_appliances',
            'property_id',
            'property_appliances_id'
        );
    }

    /**
     * Get the heating systems of the property.
     */
    public function heatingSystems(): BelongsToMany
    {
        return $this->belongsToMany(
            PropertyHeating::class,
            'property_to_heating',
            'property_id',
            'property_heating_id'
        );
    }

    /**
     * Get the outside spaces of the property.
     */
    public function outsideSpaces(): BelongsToMany
    {
        return $this->belongsToMany(
            PropertyOutsideSpace::class,
            'property_to_outside_space',
            'property_id',
            'property_outside_space_id'
        );
    }

    /**
     * Get the parking options of the property.
     */
    public function parkingOptions(): BelongsToMany
    {
        return $this->belongsToMany(
            PropertyParking::class,
            'property_to_parking',
            'property_id',
            'property_parking_id'
        );
    }

    /**
     * Get the security features of the property.
     */
    public function securityFeatures(): BelongsToMany
    {
        return $this->belongsToMany(
            PropertySecurity::class,
            'property_to_security',
            'property_id',
            'property_security_id'
        );
    }

    /**
     * Get the use classes of the property.
     */
    public function useClasses(): BelongsToMany
    {
        return $this->belongsToMany(
            PropertyUseClass::class,
            'property_to_use_class',
            'property_id',
            'property_use_class_id'
        );
    }

    /**
     * Get the landlords of the property.
     */
    public function landlords(): HasMany
    {
        return $this->hasMany(PropertyLandlord::class, 'property_landlord_property', 'property_id');
    }

    /**
     * Get the vendors of the property.
     */
    public function vendors(): HasMany
    {
        return $this->hasMany(PropertyVendor::class, 'property_vendor_property', 'property_id');
    }

    /**
     * Get the rooms of the property.
     */
    public function rooms(): HasMany
    {
        return $this->hasMany(PropertyRoom::class, 'property_room_property', 'property_id');
    }

    /**
     * Get the images of the property.
     */
    public function images(): HasMany
    {
        return $this->hasMany(PropertyImages::class, 'image_property', 'property_id');
    }

    /**
     * Get the files of the property.
     */
    public function files(): HasMany
    {
        return $this->hasMany(PropertyFiles::class, 'file_property', 'property_id');
    }

    /**
     * Get the price log of the property.
     */
    public function priceLog(): HasMany
    {
        return $this->hasMany(PropertyLogPrice::class, 'property_log_price_property', 'property_id');
    }

    /**
     * Get the status log of the property.
     */
    public function statusLog(): HasMany
    {
        return $this->hasMany(PropertyLogStatus::class, 'property_log_status_property', 'property_id');
    }

    /**
     * Get the certificates for the property.
     */
    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class, 'certificate_property', 'property_id');
    }

    /**
     * Get the tenancies for the property.
     */
    public function tenancies(): HasMany
    {
        return $this->hasMany(Tenancy::class, 'tenancy_property', 'property_id');
    }

    /**
     * Get the updates for the property.
     */
    public function updates(): HasMany
    {
        return $this->hasMany(PropertyUpdates::class, 'property_updates_property', 'property_id');
    }
}