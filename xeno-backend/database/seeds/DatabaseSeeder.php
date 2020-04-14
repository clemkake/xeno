<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Company::class); //
        $this->call(Deals::class); //
        $this->call(userTypeSeeder::class); //
        $this->call(JobFunctionsSeeder::class);
        $this->call(UsersSeeder::class);
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        // DB::table('users')->delete();

        // User::create(['email' => 'foo@bar.com']);
    }

}