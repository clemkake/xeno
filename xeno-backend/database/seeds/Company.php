<?php

use Illuminate\Database\Seeder;

class Company extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'logo' => 'https://via.placeholder.com/48',
                'name' => 'TornixTech',
                'country' => 'CIV',
                'city' => 'Abidjan',
                'number_of_employees' => 20
            ]
        ]);
    }
}
