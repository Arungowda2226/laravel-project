<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class business_detail extends Model
{
    use HasFactory;
    protected $fillable=[
        'OrganisationName',
        'OrganisationAddress',
        'OrganisationState',
        'OrganisationCity',
        'OrganisationCountry',
        'OrganisationPhone',
        'OrganisationEmail',
        'OrganisationPhotos'
    ];
}
