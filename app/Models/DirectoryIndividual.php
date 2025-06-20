<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectoryIndividual extends Model
{
    //

    /**
     * Get the Bank associated with this record.
     */
    public function name(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'directory_individual_bank_name', 'bank_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'directory_individual_created_by', 'employee_id');
    }

    /**
     * Get the Title associated with this record.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'directory_individual_title', 'title_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'directory_individual_updated_by', 'employee_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'directory_individual_company', 'directory_id');
    }

    /**
     * Get the DirectoryStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(DirectoryStatus::class, 'directory_individual_status', 'directory_status_id');
    }
}
