<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payplan extends Model
{
    protected $fillable = [
        'name' , 'display_name' , 'description' , 'is_recurring' ,
        'is_recurring' , 'billing_cycle' , 'payplan_terms' , 'is_active'
    ];
}
