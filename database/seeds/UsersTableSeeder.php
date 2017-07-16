<?php

use Illuminate\Database\Seeder;
use \App\User;

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
            'name' => 'Leonardo',
            'lastname' => 'Hidalgo Sepulveda',
            'rut' => '18541556-2',
            'dni_number' => 'A030303860',
            'birth_date' => '1993-09-09',
            'email' => 'lhidalgosep@gmail.com',
            'email_ads' => 'lhidalgosep@gmail.com',
            'address' => 'El parron 4512',
            'phone' => '+56979496212',
            'password' => bcrypt('12345'),
            'active' => 1,
        ]);
    }
}