<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    protected $fillable = [
        'f_name',
        'l_name',
        'phone',
        'email',
        'city',
        'address',
        'district',
        'post_code',
        'other_note'
    ];

    public function payments()
    {
        return $this->hasMany('App\Models\models\Payment');
    }

    use HasFactory;
}
