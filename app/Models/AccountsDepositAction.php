<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsDepositAction extends Model
{
    protected $table = 'accounts_deposit_action';
    
    public $timestamps = false;

        protected $fillable = [
        'deposit_action_name',
        'deposit_action_sort',
        'deposit_action_archived',
    ];

    protected $casts = [
        'deposit_action_sort' => 'integer',
        'deposit_action_archived' => 'boolean',
    ];
}