<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_detail extends Model
{
    use HasFactory;
     protected $fillable=[
        'Name',
        'FatherName',
        'MotherName',
        'Photo',
        'Phone',
        'Email',
        'DOB',
        'Gender',
        'Married',
        'BloodGroup',
        'Address',
        'State',
        'City',
        'Pincode',
        'Country',
        'OriginAddress',
        'OriginState',
        'OriginCity',
        'OriginPincode'
    ];
}
