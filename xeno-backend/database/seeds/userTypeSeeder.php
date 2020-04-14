<?php

use Illuminate\Database\Seeder;

class userTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users_types')->insert([
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
