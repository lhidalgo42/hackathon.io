<?php

class InstitutionTableSeeder extends Seeder
{

    public function run()
    {
        Institution::create([
            'name' => 'BANCHILE ASESORIA FINANCIERA S.A.',
            'sbif_code' => '231'
        ]);
        Institution::create([
            'name' => 'SCOTIA SUD AMERICANO ASESORIAS FINANCIERAS LTDA.',
            'sbif_code' => '235'
        ]);
        Institution::create([
            'name' => 'BCI ASESORIA FINANCIERA S.A.',
            'sbif_code' => '236'
        ]);
        Institution::create([
            'name' => 'ITAÚ ASESORIAS FINANCIERAS S.A.',
            'sbif_code' => '237'
        ]);
        Institution::create([
            'name' => 'BBVA ASESORIAS FINANCIERAS S.A.',
            'sbif_code' => '241'
        ]);
        Institution::create([
            'name' => 'BANCOESTADO MICROEMPRESAS S.A.',
            'sbif_code' => '245'
        ]);
        Institution::create([
            'name' => 'BANRIPLEY ASESORÍA FINANCIERA LTDA.',
            'sbif_code' => '248'
        ]);
        Institution::create([
            'name' => 'BANCO DE CHILE',
            'sbif_code' => '001'
        ]);
        Institution::create([
            'name' => 'BANCO INTERNACIONAL',
            'sbif_code' => '009'
        ]);
        Institution::create([
            'name' => 'SCOTIABANK CHILE',
            'sbif_code' => '014'
        ]);
        Institution::create([
            'name' => 'BANCO DE CREDITO E INVERSIONES',
            'sbif_code' => '016'
        ]);
        Institution::create([
            'name' => 'BANCO BICE',
            'sbif_code' => '028'
        ]);
        Institution::create([
            'name' => 'HSBC BANK (CHILE)',
            'sbif_code' => '031'
        ]);
        Institution::create([
            'name' => 'ITAÚ CORPBANCA',
            'sbif_code' => '039'
        ]);
        Institution::create([
            'name' => 'BANCO SECURITY',
            'sbif_code' => '049'
        ]);
        Institution::create([
            'name' => 'BANCO FALABELLA',
            'sbif_code' => '051'
        ]);
        Institution::create([
            'name' => 'BANCO RIPLEY',
            'sbif_code' => '053'
        ]);
        Institution::create([
            'name' => 'RABOBANK CHILE (ex HNS BANCO)',
            'sbif_code' => '054'
        ]);
        Institution::create([
            'name' => 'BANCO CONSORCIO (ex BANCO MONEX)',
            'sbif_code' => '055'
        ]);
        Institution::create([
            'name' => 'BANCO PENTA',
            'sbif_code' => '056'
        ]);
        Institution::create([
            'name' => 'BANCO BILBAO VIZCAYA ARGENTARIA, CHILE (BBVA)',
            'sbif_code' => '504'
        ]);
        Institution::create([
            'name' => 'BANCO BTG PACTUAL CHILE',
            'sbif_code' => '059'
        ]);


    }

}
