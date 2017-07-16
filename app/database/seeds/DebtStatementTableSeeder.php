<?php


class DebtStatementTableSeeder extends Seeder
{

    public function run()
    {
        DebtStatement::create([
            'name' => 'Vigente',
            'description' => 'Corresponde a la Deuda Actual Activa'
        ]);
        DebtStatement::create([
            'name' => 'Mora 30-89 días',
            'description' => 'Corresponde a la Deuda entre 30-89 días'
        ]);
        DebtStatement::create([
            'name' => '90 días y más',
            'description' => 'Corresponde a la Deuda entre 90 días y más'
        ]);

    }

}