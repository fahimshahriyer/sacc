<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'account_type_id', 'name', 'description', 'account_head' ,
        'current_balance', 'opening_balance', 'ending_balance', 'opening_date',
        'ending_date', 'is_locked'
    ];

    protected $dates = [
        'opening_date',
        'ending_date'
    ];

    public function type()
    {
        return $this->belongsTo(AccountType::class,'account_type_id');
    }
}
