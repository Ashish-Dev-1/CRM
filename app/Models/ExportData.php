<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExportData extends Model
{
    //

    /**
     * Get the ExportDateType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(ExportDateType::class, 'export_data_type', 'export_date_type_id');
    }
}
