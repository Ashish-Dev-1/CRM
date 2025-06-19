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
        'works_token',
        'works_property',
        'works_category',
        'works_title',
        'works_description',
        'works_status',
        'works_room',
        // ...other fields...
    ];

    protected $dates = [
        'works_date_reported',
        'works_date_completed',
        'works_date_created',
        'works_date_updated',
    ];

    /**
     * Get the property that the works belongs to.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'works_property', 'property_id');
    }

    /**
     * Get the category of the works.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(WorksCategory::class, 'works_category', 'works_category_id');
    }

    /**
     * Get the status of the works.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(WorksStatus::class, 'works_status', 'works_status_id');
    }

    /**
     * Get the room associated with the works.
     */
    public function room(): BelongsTo
    {
        return $this->belongsTo(WorksRoom::class, 'works_room', 'works_room_id');
    }

    /**
     * Get the contractor for the works.
     */
    public function contractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'works_contractor', 'directory_id');
    }

    /**
     * Get the person who reported the works.
     */
    public function reporter(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'works_reported_by', 'employee_id');
    }

    /**
     * Get the employee who created the works.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'works_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the works.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'works_updated_by', 'employee_id');
    }

    /**
     * Get the files associated with the works.
     */
    public function files(): HasMany
    {
        return $this->hasMany(WorksFiles::class, 'works_files_works', 'works_id');
    }

    /**
     * Get the updates for the works.
     */
    public function updates(): HasMany
    {
        return $this->hasMany(WorksUpdates::class, 'works_updates_works', 'works_id');
    }

    /**
     * Get the invoice lines associated with the works.
     */
    public function invoiceLines(): HasMany
    {
        return $this->hasMany(AccountsInvoiceLine::class, 'invoice_line_works', 'works_id');
    }
}