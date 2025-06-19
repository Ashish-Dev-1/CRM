<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorksStatus extends Model
{
    protected $table = 'works_status';
    protected $primaryKey = 'works_status_id';
    public $timestamps = false;

    protected $fillable = [
        'works_status_name',
        'works_status_description',
    ];

    /**
     * Get the works with this status.
     */
    public function works(): HasMany
    {
        return $this->hasMany(Works::class, 'works_status', 'works_status_id');
    }
}