<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PersonalInfos extends Model
{
    $fillable=[
    'id',
    'name',
    'description',
    'dob',
    'phone',
    'address',
   	'email',
   	'website'
    ]
}
