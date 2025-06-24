<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicantChainStatus extends Model
{
    protected $table = 'applicant_chain_status';
    
    public $timestamps = false;

        protected $fillable = [
        'applicant_chain_status_name',
        'applicant_chain_status_sort',
    ];

    protected $casts = [
        'applicant_chain_status_sort' => 'integer',
    ];

    /**
     * Get the applicants with this chain status.
     */
    
}