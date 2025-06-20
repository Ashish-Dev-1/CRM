<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectoryToTrades extends Model
{
    //

    /**
     * Get the Directory associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'directory_id', 'directory_id');
    }

    /**
     * Get the DirectoryTrades associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(DirectoryTrades::class, 'directory_trades_id', 'directory_trades_id');
    }
}
