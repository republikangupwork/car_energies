<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormSubmit extends Model
{
    protected $table = 'form_submit';

    public function customer()
    {
    	return $this->belongsTo(Customer::class,'customer_id'); 
    }
}
