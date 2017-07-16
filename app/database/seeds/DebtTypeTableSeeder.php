<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DebtTypeTableSeeder extends Seeder
{

    public function run()
    {
        DebtType::create([
            'name' => 'DD',
            'description' => 'Deuda Directa'
        ]);
        DebtType::create([
            'name' => 'DI',
            'description' => 'Deuda Indirecta'
        ]);
    }

}