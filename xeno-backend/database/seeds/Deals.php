<?php

use Illuminate\Database\Seeder;

class Deals extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deals')->insert([
            [
                'company' => 1,
                'title' => 'In Queue'
            ],[
                'company' => 1,
                'title' => 'Contacted'
            ],[
                'company' => 1,
                'title' => 'In Progress'
            ],
            [
                'company' => 1,
                'title' => 'Closed'
            ],
            [
                'company' => 1,
                'title' => 'Inactive'
            ]
        ]);
    }
}
