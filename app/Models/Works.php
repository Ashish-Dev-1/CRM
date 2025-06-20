<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Works extends Model
{
    protected $table = 'works';
    protected $primaryKey = 'works_id';
    public $timestamps = false;

        protected $fillable = [
        'works_id',
        'works_property',
        'works_development',
        'works_category',
        'works_contractor',
        'works_description',
        'works_outcome',
        'works_notes',
        'works_private_notes',
        'works_cancellation_reason',
        'works_contractor_quote',
        'works_contractor_cost',
        'works_agency_invoice_id',
        'works_status',
        'works_room',
        'works_reminders',
        'works_date_created',
        'works_date_updated',
        'works_date_last_instructed',
        'works_date_last_awaiting_landlord_approval',
        'works_date_last_awaiting_landlord_payment',
        'works_date_last_pending',
        'works_created_by',
        'works_updated_by',
    ];

    protected $casts = [
        'works_category' => 'integer',
        'works_contractor_cost' => 'decimal:2',
        'works_status' => 'integer',
        'works_room' => 'integer',
        'works_reminders' => 'integer',
        'works_date_created' => 'datetime',
        'works_date_updated' => 'datetime',
        'works_date_last_instructed' => 'datetime',
        'works_date_last_awaiting_landlord_approval' => 'datetime',
        'works_date_last_awaiting_landlord_payment' => 'datetime',
        'works_date_last_pending' => 'datetime',
    ];

        protected $dates = [
        'works_date_created',
        'works_date_updated',
        'works_date_last_instructed',
        'works_date_last_awaiting_landlord_approval',
        'works_date_last_awaiting_landlord_payment',
        'works_date_last_pending',
    ];

    /**
     * Get the property that the works belongs to.
     */
    

    /**
     * Get the category of the works.
     */
    

    /**
     * Get the status of the works.
     */
    

    /**
     * Get the room associated with the works.
     */
    

    /**
     * Get the contractor for the works.
     */
    

    /**
     * Get the person who reported the works.
     */
    

    /**
     * Get the employee who created the works.
     */
    

    /**
     * Get the employee who updated the works.
     */
    

    /**
     * Get the files associated with the works.
     */
    

    /**
     * Get the updates for the works.
     */
    

    /**
     * Get the invoice lines associated with the works.
     */
    

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'works_created_by', 'employee_id');
    }

    /**
     * Get the Development associated with this record.
     */
    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'works_development', 'development_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'works_property', 'property_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'works_updated_by', 'employee_id');
    }

    /**
     * Get the WorksCategory associated with this record.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(WorksCategory::class, 'works_category', 'works_category_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function contractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'works_contractor', 'directory_id');
    }

    /**
     * Get the WorksStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(WorksStatus::class, 'works_status', 'works_status_id');
    }

    /**
     * Get the WorksRoom associated with this record.
     */
    public function room(): BelongsTo
    {
        return $this->belongsTo(WorksRoom::class, 'works_room', 'works_room_id');
    }
}