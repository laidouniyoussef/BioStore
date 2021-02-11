<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
   
    protected $fillable =[
            'message_form',
            'name',
            'email',
            'subject'
    ]; 
    use HasFactory;
}
