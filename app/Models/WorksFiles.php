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
        'works_files_id',
        'works_id',
        'works_files_filename',
        'works_files_caption',
        'works_files_date_added',
        'works_files_sort',
    ];

    protected $casts = [
        'works_files_date_added' => 'datetime',
    ];

        protected $dates = [
        'works_files_date_added',
    ];

    /**
     * Get the works entry that owns the file.
     */
    

    /**
     * Get the employee who created the file.
     */
    

    /**
     * Get the employee who updated the file.
     */
    

    /**
     * Get the Works associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Works::class, 'works_id', 'works_id');
    }
}