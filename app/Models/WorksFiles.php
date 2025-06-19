<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorksFiles extends Model
{
    protected $table = 'works_files';
    protected $primaryKey = 'works_files_id';
    public $timestamps = false;

    protected $fillable = [
        'works_files_works',
        'works_files_name',
        'works_files_filename',
        'works_files_date_created',
        'works_files_date_updated',
        'works_files_created_by',
        'works_files_updated_by',
    ];

    protected $dates = [
        'works_files_date_created',
        'works_files_date_updated',
    ];

    /**
     * Get the works entry that owns the file.
     */
    public function works(): BelongsTo
    {
        return $this->belongsTo(Works::class, 'works_files_works', 'works_id');
    }

    /**
     * Get the employee who created the file.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'works_files_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the file.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'works_files_updated_by', 'employee_id');
    }
}