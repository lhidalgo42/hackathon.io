<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Faker\Provider\en_US\PhoneNumber;

class UserTableSeeder extends Seeder {

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
            'password' => '12345',
            'active' => 1,
        ]);

        User::create([
            'name' => 'Samuel',
            'lastname' => 'Munoz figueroa',
            'rut' => '19890910-6',
            'dni_number' => '1234512345',
            'birth_date' => '1998-03-20',
            'email' => 'samuel.munoz.f@gmail.com',
            'email_ads' => 'samuel.munoz.f@gmail.com',
            'address' => 'Armando Moock 3595',
            'phone' => '+56965162126',
            'password' => '12345',
            'active' => 1,
        ]);

        User::create([
            'name' => 'Sebastian',
            'lastname' => 'Cardoza Dominguez',
            'rut' => '18607283-9',
            'dni_number' => '1234522345',
            'birth_date' => '1994-02-13',
            'email' => 'se.cardoza@alumnos.duoc.cl',
            'email_ads' => 'se.cardoza@alumnos.duoc.cl',
            'address' => 'Bonbero Enrique Cofre 0280',
            'phone' => '+56973460456',
            'password' => '12345',
            'active' => 1,
        ]);

        User::create([
            'name' => 'Ian',
            'lastname' => 'Cardenas Castillo',
            'rut' => '19228662-k',
            'dni_number' => '1234534345',
            'birth_date' => '1996-01-22',
            'email' => 'iancardenas96@gmail.com',
            'email_ads' => 'iancardenas@gmail.com',
            'address' => 'Portal Andino 0932',
            'phone' => '+56981939074',
            'password' => '12345',
            'active' => 1,
        ]);
        User::create([
            'name' => 'Daniel',
            'lastname' => 'Gonzalez Guerrero',
            'rut' => '13312821-2',
            'dni_number' => '1234564345',
            'birth_date' => '1977-05-12',
            'email' => 'dcgonzalez.cl@gmail.com',
            'email_ads' => 'dcgonzalez.cl@gmail.com',
            'address' => 'Eleuterio Ramirez 825',
            'phone' => '+5690846865',
            'password' => '12345',
            'active' => 1,
        ]);
		$faker = Faker::create();

		foreach(range(1, 15) as $index)
		{
            User::create([
                'name' => $faker->firstName(),
                'lastname' => $faker->lastName.' '.$faker->lastName,
                'rut' => '1'.rand(3000000,9000000).'-2',
                'dni_number' => '123'.rand(1000,9999).'345',
                'birth_date' => $faker->date(),
                'email' => $faker->freeEmail,
                'email_ads' => $faker->freeEmail,
                'address' => $faker->secondaryAddress,
                'phone' => '+569'.rand(12345678,98765432),
                'password' => rand(12345,54321),
                'active' => 1,
            ]);
		}
	}

}