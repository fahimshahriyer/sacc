<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    protected $fillable = [
    	'invoice_id' , 'name' , 'quantity' , 'amount' , 'total'  
    ];

    public function invoice()
    {
    	$this->belongsTo(Invoice::class);
    }
}
