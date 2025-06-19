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
        'works_updates_works',
        'works_updates_date',
        'works_updates_employee',
        'works_updates_notes',
    ];

    protected $dates = [
        'works_updates_date',
    ];

    /**
     * Get the works entry that this update belongs to.
     */
    public function works(): BelongsTo
    {
        return $this->belongsTo(Works::class, 'works_updates_works', 'works_id');
    }

    /**
     * Get the employee who made this update.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'works_updates_employee', 'employee_id');
    }
}