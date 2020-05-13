<?php

use App\Membro;
use Illuminate\Database\Seeder;

class MembrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membro::create([
            'name' => 'vadimiro francisco',
            'email' => 'valdimiroeinstein@gmail.com',
            'mobile' => '840297715',
            'group' => 'fortuna',
        ]);

    }
}
