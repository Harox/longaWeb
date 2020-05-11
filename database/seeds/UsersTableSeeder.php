<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'vadimiro francisco',
            'email' => 'valdimiroeinstein@gmail.com',
            'mobile' => '840297715',
            'password' => bcrypt('1234'),
        ]);
    }
}
