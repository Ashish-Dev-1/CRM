<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsTransactionType extends Model
{
    protected $table = 'accounts_transaction_type';
    protected $primaryKey = 'transaction_type_id';
    public $timestamps = false;

    protected $fillable = [
        'transaction_type_name',
        'transaction_type_description',
        'transaction_type_sort',
    ];

    /**
     * Get the transactions of this type.
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(AccountsTransaction::class, 'transaction_type', 'transaction_type_id');
    }
}