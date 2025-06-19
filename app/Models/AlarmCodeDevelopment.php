<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AlarmCodeDevelopment extends Model
{
    protected $table = 'alarm_code_development';
    protected $primaryKey = 'alarm_code_id';
    public $timestamps = false;

    protected $fillable = [
        'alarm_code_development',
        'alarm_code_type',
        'alarm_code_code',
        'alarm_code_notes',
        'alarm_code_date_created',
        'alarm_code_date_updated',
        'alarm_code_created_by',
        'alarm_code_updated_by',
    ];

    protected $dates = [
        'alarm_code_date_created',
        'alarm_code_date_updated',
    ];

    /**
     * Get the development that this alarm code belongs to.
     */
    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'alarm_code_development', 'development_id');
    }

    /**
     * Get the type of this alarm code.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(AlarmCodeType::class, 'alarm_code_type', 'alarm_code_type_id');
    }

    /**
     * Get the employee who created this alarm code.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'alarm_code_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this alarm code.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'alarm_code_updated_by', 'employee_id');
    }
}