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
        // $this->call(UserSeeder::class);
        $this->call(userseeder::class);
    }
}
class userseeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'admin', 'email' => 'okee@gmail.com', 'password' => bcrypt('123456')],
            ['name' => 'laravel', 'email' => 'laravel@gmail.com', 'password' => bcrypt('123456')]
        ]);
    }
}
