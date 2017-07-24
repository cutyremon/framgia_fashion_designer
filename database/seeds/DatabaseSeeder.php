<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'full_name' => 'Admin',
                'email' => 'hoangduyib96.@gmail.com',
                'address' => 'Ha Noi',
                'password' => bcrypt('admin'),
                'role' => '1',
            ]);
        for($i = 0; $i < 9; $i ++) {
            DB::table('users')->insert([
                'full_name' => str_random(10),
                'email' => str_random(5).'@gmail.com',
                'address' => str_random(30),
                'password' => bcrypt('matkhau'),
                'role' => '0',
            ]);
        }
    }
}
