<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CalendarEvent extends Model
{
    protected $table = 'calendar_event';
    protected $primaryKey = 'calendar_event_id';
    public $timestamps = false;

    protected $fillable = [
        'calendar_event_type',
        'calendar_event_title',
        'calendar_event_date_start',
        'calendar_event_date_end',
        'calendar_event_all_day',
        'calendar_event_notes',
        'calendar_event_location',
        'calendar_event_employee',
        'calendar_event_branch',
        'calendar_event_property',
        'calendar_event_landlord',
        'calendar_event_vendor',
        'calendar_event_applicant',
        'calendar_event_tenant',
        'calendar_event_status',
        'calendar_event_date_created',
        'calendar_event_date_updated',
        'calendar_event_created_by',
        'calendar_event_updated_by',
        // ... other fields ...
    ];

    protected $dates = [
        'calendar_event_date_start',
        'calendar_event_date_end',
        'calendar_event_date_created',
        'calendar_event_date_updated',
    ];

    /**
     * Get the type of this calendar event.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(CalendarEventType::class, 'calendar_event_type', 'calendar_event_type_id');
    }

    /**
     * Get the status of this calendar event.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(CalendarEventStatus::class, 'calendar_event_status', 'calendar_event_status_id');
    }

    /**
     * Get the location of this calendar event.
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(CalendarEventLocation::class, 'calendar_event_location', 'calendar_event_location_id');
    }

    /**
     * Get the employee assigned to this calendar event.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_employee', 'employee_id');
    }

    /**
     * Get the branch associated with this calendar event.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'calendar_event_branch', 'branch_id');
    }

    /**
     * Get the property associated with this calendar event.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'calendar_event_property', 'property_id');
    }

    /**
     * Get the landlord associated with this calendar event.
     */
    public function landlord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class, 'calendar_event_landlord', 'landlord_id');
    }

    /**
     * Get the vendor associated with this calendar event.
     */
    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'calendar_event_vendor', 'vendor_id');
    }

    /**
     * Get the applicant associated with this calendar event.
     */
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'calendar_event_applicant', 'applicant_id');
    }

    /**
     * Get the tenant associated with this calendar event.
     */
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class, 'calendar_event_tenant', 'tenant_id');
    }

    /**
     * Get the employee who created this calendar event.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this calendar event.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_updated_by', 'employee_id');
    }

    /**
     * Get the viewing details if this is a viewing event.
     */
    public function viewing(): HasOne
    {
        return $this->hasOne(CalendarEventViewing::class, 'calendar_event_viewing_calendar_event', 'calendar_event_id');
    }

    /**
     * Get the inspection details if this is an inspection event.
     */
    public function inspection(): HasOne
    {
        return $this->hasOne(CalendarEventInspection::class, 'calendar_event_inspection_calendar_event', 'calendar_event_id');
    }

    /**
     * Get the files associated with this calendar event.
     */
    public function files(): HasMany
    {
        return $this->hasMany(CalendarFile::class, 'calendar_files_calendar_event', 'calendar_event_id');
    }

    /**
     * Get the updates for this calendar event.
     */
    public function updates(): HasMany
    {
        return $this->hasMany(CalendarEventUpdate::class, 'calendar_event_updates_calendar_event', 'calendar_event_id');
    }
}