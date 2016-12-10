<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    	'user_id' , 'name' , 'unique_roll_no' , 'is_active',
    ];
}
