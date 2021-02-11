<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=[
        'total',
        'payment_type',
        'customer_id',
        'status'
    ];
    
    public function customer(){
        return $this->belongsTo('App\Models\models\CustomerDetail');
    }
    
    use HasFactory;

}
