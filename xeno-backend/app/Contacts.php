<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    //
    protected $fillable = [
        'first_name',
        'last_name',
        'nickname',
        'title',
        'lead_referral_source',
        'date_of_initial_contact',
        'Industry',
        'website',
        'deal',
        'company',
        'status',
        'linkedin_profile',
        'background_info',
        'sales_rep',
        'ratings',
        'project_type',
        'project_description',
        'proposal_due_date',
        'budget',
        'is_lead',
        'image',
        'manager_id',
        'about_me',
        'work_phone',
        'mobile_phone',
        'fax',
        'street_address',
        'city',
        'state_province',
        'postal_code',
        'country'
    ];
}
