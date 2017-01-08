<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $fillable=[
    
    'name',
    'description',
    'dob',
    'phone_no',
    'address',
   	'email',
   	'website',
   	'images'
    ];
}
