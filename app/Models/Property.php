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
        'property_id',
        'property_token',
        'property_availability',
        'property_letting_service',
        'property_letting_available_from',
        'property_letting_furnished_status',
        'property_letting_pets',
        'property_letting_smoking',
        'property_category',
        'property_type',
        'property_number_name',
        'property_apartment_number_name',
        'property_address_line_1',
        'property_address_line_2',
        'property_suburb',
        'property_town_city',
        'property_postcode',
        'property_country',
        'property_display_address',
        'property_plot_reference',
        'property_latitude',
        'property_longitude',
        'property_price_qualifier',
        'property_price',
        'property_deposit',
        'property_admin_fee',
        'property_currency',
        'property_area_value',
        'property_area_type',
        'property_bathrooms',
        'property_bedrooms',
        'property_reception_rooms',
        'property_garages',
        'property_parking_spaces',
        'property_garden',
        'property_garden_access',
        'property_garden_location',
        'property_is_new_home',
        'property_summary_text',
        'property_description_text',
        'property_virtual_tour',
        'property_brochure_url',
        'property_video_url',
        'property_featured',
        'property_branch',
        'property_contact_group',
        'property_instructions',
        'property_status',
        'property_create_time',
        'property_update_time',
        'property_valuation_time',
        'property_display_time',
        'property_expiry_time',
        'property_viewing_arrangement',
        'property_viewing_length',
        'property_board',
        'property_board_status',
        'property_board_location',
        'property_board_location_custom',
        'property_board_notes',
        'property_keys',
        'property_keys_notes',
        'property_lease_remaining',
        'property_ground_rent',
        'property_service_charge',
        'property_council_tax_band',
        'property_current_occupier',
        'property_buyer',
        'property_tenant',
        'property_vendor',
        'property_landlord',
        'property_chain_free',
        'property_chain_notes',
        'property_website_publish',
        'property_website_title',
        'property_portal_publish',
        'property_publish_zoopla',
        'property_publish_primelocation',
        'property_publish_onthemarket',
        'property_publish_rightmove',
        'property_rightmove_brochure_url',
        'property_rightmove_window_display',
        'property_rightmove_audio_tour',
        'property_rightmove_virtual_tour',
        'property_rightmove_featured_property',
        'property_rightmove_premium_listing',
        'property_rightmove_branded_tour',
        'property_zoopla_premium_listing',
        'property_zoopla_featured_property',
        'property_zoopla_slideshow',
        'property_internet_updated',
        'property_schedule_pdf',
        'property_branch_visible',
        'property_corporate_instruction',
    ];

    protected $casts = [
        'property_availability' => 'integer',
        'property_letting_service' => 'integer',
        'property_letting_available_from' => 'date',
        'property_letting_furnished_status' => 'integer',
        'property_letting_pets' => 'integer',
        'property_letting_smoking' => 'integer',
        'property_category' => 'integer',
        'property_type' => 'integer',
        'property_suburb' => 'integer',
        'property_country' => 'integer',
        'property_latitude' => 'decimal:2',
        'property_longitude' => 'decimal:2',
        'property_price_qualifier' => 'integer',
        'property_price' => 'integer',
        'property_deposit' => 'integer',
        'property_admin_fee' => 'integer',
        'property_currency' => 'integer',
        'property_area_value' => 'integer',
        'property_area_type' => 'integer',
        'property_bathrooms' => 'integer',
        'property_bedrooms' => 'integer',
        'property_reception_rooms' => 'integer',
        'property_garages' => 'integer',
        'property_parking_spaces' => 'integer',
        'property_garden' => 'integer',
        'property_garden_access' => 'integer',
        'property_garden_location' => 'integer',
        'property_is_new_home' => 'boolean',
        'property_featured' => 'boolean',
        'property_branch' => 'integer',
        'property_contact_group' => 'integer',
        'property_status' => 'integer',
        'property_create_time' => 'datetime',
        'property_update_time' => 'datetime',
        'property_valuation_time' => 'datetime',
        'property_display_time' => 'datetime',
        'property_expiry_time' => 'datetime',
        'property_viewing_length' => 'integer',
        'property_board' => 'integer',
        'property_board_status' => 'integer',
        'property_board_location' => 'integer',
        'property_lease_remaining' => 'integer',
        'property_ground_rent' => 'integer',
        'property_service_charge' => 'integer',
        'property_current_occupier' => 'integer',
        'property_chain_free' => 'boolean',
        'property_website_publish' => 'boolean',
        'property_portal_publish' => 'boolean',
        'property_publish_zoopla' => 'boolean',
        'property_publish_primelocation' => 'boolean',
        'property_publish_onthemarket' => 'boolean',
        'property_publish_rightmove' => 'boolean',
        'property_rightmove_window_display' => 'boolean',
        'property_rightmove_audio_tour' => 'boolean',
        'property_rightmove_virtual_tour' => 'boolean',
        'property_rightmove_featured_property' => 'boolean',
        'property_rightmove_premium_listing' => 'boolean',
        'property_rightmove_branded_tour' => 'boolean',
        'property_zoopla_premium_listing' => 'boolean',
        'property_zoopla_featured_property' => 'boolean',
        'property_zoopla_slideshow' => 'boolean',
        'property_internet_updated' => 'datetime',
        'property_branch_visible' => 'boolean',
        'property_corporate_instruction' => 'boolean',
    ];

    protected $dates = [
        'property_letting_available_from',
        'property_create_time',
        'property_update_time',
        'property_valuation_time',
        'property_display_time',
        'property_expiry_time',
        'property_internet_updated',
    ];

    /**
     * Get the branch that the property belongs to.
     */
    

    /**
     * Get the category of the property.
     */
    

    /**
     * Get the type of the property.
     */
    

    /**
     * Get the country of the property.
     */
    

    /**
     * Get the status of the property.
     */
    

    /**
     * Get the development of the property.
     */
    

    /**
     * Get the accessibility features of the property.
     */
    

    /**
     * Get the appliances of the property.
     */
    

    /**
     * Get the heating systems of the property.
     */
    

    /**
     * Get the outside spaces of the property.
     */
    

    /**
     * Get the parking options of the property.
     */
    

    /**
     * Get the security features of the property.
     */
    

    /**
     * Get the use classes of the property.
     */
    

    /**
     * Get the landlords of the property.
     */
    

    /**
     * Get the vendors of the property.
     */
    

    /**
     * Get the rooms of the property.
     */
    

    /**
     * Get the images of the property.
     */
    

    /**
     * Get the files of the property.
     */
    

    /**
     * Get the price log of the property.
     */
    

    /**
     * Get the status log of the property.
     */
    

    /**
     * Get the certificates for the property.
     */
    

    /**
     * Get the tenancies for the property.
     */
    

    /**
     * Get the updates for the property.
     */
    

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_updated_by', 'employee_id');
    }

    /**
     * Get the Branch associated with this record.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'property_branch', 'branch_id');
    }

    /**
     * Get the PropertyStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(PropertyStatus::class, 'property_status', 'property_status_id');
    }

    /**
     * Get the PropertyType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class, 'property_type', 'property_type_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'property_country', 'country_id');
    }

    /**
     * Get the ContractType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(ContractType::class, 'property_contract_type', 'contract_type_id');
    }
}