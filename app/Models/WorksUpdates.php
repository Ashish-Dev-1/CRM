<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorksUpdates extends Model
{
    protected $table = 'works_updates';
    protected $primaryKey = 'works_updates_id';
    public $timestamps = false;

        protected $fillable = [
        'works_updates_id',
        'works_updates_works_id',
        'works_updates_public_notes',
        'works_updates_private_notes',
        'works_updates_notify_landlords',
        'works_updates_notify_tenants',
        'works_updates_notify_contractor',
        'works_updates_notify_works_dept',
        'works_updates_date_created',
        'works_updates_created_by',
    ];

    protected $casts = [
        'works_updates_notify_landlords' => 'integer',
        'works_updates_notify_tenants' => 'integer',
        'works_updates_notify_contractor' => 'integer',
        'works_updates_notify_works_dept' => 'integer',
        'works_updates_date_created' => 'datetime',
    ];

        protected $dates = [
        'works_updates_date_created',
    ];

    /**
     * Get the works entry that this update belongs to.
     */
    

    /**
     * Get the employee who made this update.
     */
    

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'works_updates_created_by', 'employee_id');
    }

    /**
     * Get the Works associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Works::class, 'works_updates_works_id', 'works_id');
    }
}