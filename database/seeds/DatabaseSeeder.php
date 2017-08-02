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
            'name_display' => str_random(5),
            'avatar' => 'http://lorempixel.com/300/300/fashion/',
        ]);
        for ($i = 0; $i < 9; $i++) {
            DB::table('users')->insert([
                'full_name' => str_random(10),
                'name_display' => str_random(5),
                'email' => str_random(5) . '@gmail.com',
                'address' => str_random(30),
                'password' => bcrypt('matkhau'),
                'avatar' => 'http://lorempixel.com/300/300/fashion/',
                'description' => str_random(35),
            ]);
        }
        DB::table('styles')->insert([
            'tittle' => 'Công Sở',
            'description' => 'Một phong cách cho bạn tự tin trong công ty',
            'image' => 'http://lorempixel.com/300/300/fashion/',
        ]);
        DB::table('topics')->insert([
            'topic_name' => 'Đám cưới',
            'image' => 'http://lorempixel.com/300/300/fashion/',
        ]);
    }
}

