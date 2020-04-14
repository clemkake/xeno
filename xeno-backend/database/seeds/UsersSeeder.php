<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            [
                'name' => 'Admin', 
                'email' => 'admin@xeno.com',
                'password' => Hash::make('admin'),
                'last_name' => 'Doe',
                'nickname' => 'Clemkake',
                'title' => 1,
                'image' => 'https://via.placeholder.com/48',
                'manager_id' => 1,
                'about_me' => 'An Administrator provides office and administrative support to either a team or individual. This role is vital for the smooth-running of a business. Duties may include fielding telephone calls, receiving and directing visitors, word processing, creating spreadsheets and presentations, and filing.',
                'work_phone' => '8855221144',
                'mobile_phone' => '000000001',
                'fax' => '55669988',
                'street_address' => 'South Hill, Oamaru 9400, New Zealand',
                'city' => '',
                'company' => 1,
                'state_province' => '',
                'postal_code' => '',
                'country' => '',
            ],[
                'name' => 'Manager', 
                'email' => 'manager@xeno.com',
                'password' => Hash::make('manager'),
                'last_name' => 'Doe',
                'nickname' => 'cless',
                'title' => 2,
                'image' => 'https://via.placeholder.com/48',
                'manager_id' => 1,
                'about_me' => 'A manager',
                'work_phone' => '8855221144',
                'mobile_phone' => '000000002',
                'fax' => '55669988',
                'street_address' => 'South Hill, Oamaru 9400, New Zealand',
                'city' => '',
                'company' => 1,
                'state_province' => '',
                'postal_code' => '',
                'country' => '',
            ],[
                'name' => 'clement', 
                'email' => 'clement@xeno.com',
                'password' => Hash::make('clement'),
                'last_name' => 'Doe',
                'nickname' => 'Clemkake',
                'title' => 3,
                'image' => 'https://via.placeholder.com/48',
                'manager_id' => 2,
                'about_me' => 'A normal user',
                'work_phone' => '8855221144',
                'mobile_phone' => '000000003',
                'fax' => '55669988',
                'street_address' => 'South Hill, Oamaru 9400, New Zealand',
                'city' => '',
                'company' => 1,
                'state_province' => '',
                'postal_code' => '',
                'country' => '',
            ]
        ]);
    }
}
