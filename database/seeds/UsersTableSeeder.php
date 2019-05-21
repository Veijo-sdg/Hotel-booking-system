<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => ('123456'),
            //'password' => bcrypt('khaled'),
            'image' => '3.jpg',
            'Gender' => 'Male, Female',
            'mobile' => str_random(10)
        ]);
     }
}
