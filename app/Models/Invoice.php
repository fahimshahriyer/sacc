<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
    	'invoice_no' , 'invoice_date' , 'due_date' , 'student_id' , 'sub_total' , 'total_tax' , 
    	'total_adjustment' , 'grand_total' , 'approval_date' , 'is_paid'
    ];

    protected $dates = [
        'invoice_date' ,
        'due_date',
        'approval_date',
        'create_at',
        'updated_at'
    ];

    public function getStatusAttribute($value)
    {
        $statuses = [
            "Due" => 0,
            "Partial" => 1,
            "Paid" => 2
        ];
        return $status = array_search($value,$statuses);
    }

    public function items()
    {
    	return $this->hasMany(InvoiceItem::class);
    }
}
