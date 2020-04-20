<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contacts;
use Faker\Generator as Faker;

$factory->define(Contacts::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'nickname' => $faker->name,
        'title' => $faker->name,
        'lead_referral_source' => $faker->name,
        'date_of_initial_contact' => now(),
        'Industry' => 'finance',
        'website' => 'www.google.com',
        'deal' => 1,
        'company' => 1,
        'status' => '',
        'linkedin_profile' => 'https://www.linkedin.com/in/md-mujtaba-luqman-7375b0106/',
        'background_info' => '',
        'sales_rep' => 4,
        'ratings' => '5',
        'project_type' => 'testest',
        'proposal_due_date' => now(),
        'budget' => '$5000',
        'is_lead' => false,
        'image' => 'assets/images/users/profile.svg',
        'manager_id' => 1,
        'about_me' => $faker->paragraph,
        'email' => $faker->email,
        'work_phone' => '9632274918',
        'mobile_phone' => '9632274918',
        'fax' => '9632274918',
        'street_address' => $faker->address,
        'city' => $faker->name,
        'state_province' => $faker->name,
        'postal_code' => '560066',
        'country' => 'CI'
    ];
});
