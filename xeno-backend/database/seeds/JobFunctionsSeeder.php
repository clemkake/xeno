<?php

use Illuminate\Database\Seeder;

class JobFunctionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('job_functions')->insert([
            [
                'name' => 'Super-user'
            ],[
                'name' => 'Manager'
            ],[
                'name' => 'Regular-user'
            ]
        ]);
    }
}
