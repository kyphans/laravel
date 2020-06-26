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
        DB::table('taikhoan')->insert([
           ['ten_dang_nhap'=>'Kyphan','mat_khau'=>bcrypt('461999')],
            ['ten_dang_nhap'=>'admin','mat_khau'=>bcrypt('123456')]
        ]);
    }
}
