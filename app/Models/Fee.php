<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = [
        'id' , 'name' , 'description'
    ];

    public function payplan()
    {
        return $this->belongsTo(Payplan::class,'payplan_id');
    }
}
