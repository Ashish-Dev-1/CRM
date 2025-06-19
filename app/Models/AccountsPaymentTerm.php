<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsPaymentTerm extends Model
{
    protected $table = 'accounts_payment_term';
    protected $primaryKey = 'accounts_payment_term_id';
    public $timestamps = false;

    protected $fillable = [
        'accounts_payment_term_description',
        'accounts_payment_term_sort',
    ];

    /**
     * Get the directory entries that use these payment terms.
     */
    public function directories(): HasMany
    {
        return $this->hasMany(Directory::class, 'directory_payment_terms', 'accounts_payment_term_id');
    }
}