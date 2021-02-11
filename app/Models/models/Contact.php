<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
            'location',
            'email',
            'address',
            'phone'
    ];
    use HasFactory;
}
