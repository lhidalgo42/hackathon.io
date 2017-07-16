<?php

class IntitutionTableSeeder extends Seeder {

	public function run()
	{
		Intitution::create([
            'name'  => 'BANCHILE ASESORIA FINANCIERA S.A.',
            'sbif_code' => '231'
        ]);
		Intitution::create([
            'name'  => 'SCOTIA SUD AMERICANO ASESORIAS FINANCIERAS LTDA.',
            'sbif_code' => '235'
        ]);
		Intitution::create([
            'name'  => 'BCI ASESORIA FINANCIERA S.A.',
            'sbif_code' => '236'
        ]);

	}

}
/*
ITAÚ ASESORIAS FINANCIERAS S.A. (Código SBIF: 237 - ver ficha)
BBVA ASESORIAS FINANCIERAS S.A. (Código SBIF: 241 - ver ficha)
BANCOESTADO MICROEMPRESAS S.A. (Código SBIF: 245 - ver ficha)
BANRIPLEY ASESORÍA FINANCIERA LTDA. (Código SBIF: 248 - ver ficha)
    BANCO DE CHILE (Código SBIF: 001 - Ficha SBIF - ver Hechos Esenciales)
   -Opera también con las marcas Banco Edwards | Citi, Atlas y CrediChile.
BANCO INTERNACIONAL (Código SBIF: 009 - Ficha SBIF - ver Hechos Esenciales)
SCOTIABANK CHILE (Código SBIF: 014 - Ficha SBIF - ver Hechos Esenciales)
   -Opera también con la marca BancoDesarrollo
BANCO DE CREDITO E INVERSIONES (Código SBIF: 016 - Ficha SBIF - ver Hechos Esenciales)
   -Opera también con las marcas TBanc y Banco Nova
BANCO BICE (Código SBIF: 028 - Ficha SBIF - Hechos Esenciales)
HSBC BANK (CHILE) (Código SBIF: 031 - Ficha SBIF - ver Hechos Esenciales)
BANCO SANTANDER-CHILE (Código SBIF: 037 - Ficha SBIF - ver Hechos Esenciales)
   -Opera también con la marca Banefe
ITAÚ CORPBANCA (Código SBIF: 039 - Ficha SBIF - ver Hechos Esenciales)
   - Desde el 1 de abril de 2016 se fusiona el Banco Corpbanca en Itaú Corpbanca.
BANCO SECURITY (Código SBIF: 049 - Ficha SBIF - ver Hechos Esenciales)
BANCO FALABELLA (Código SBIF: 051 - Ficha SBIF - ver Hechos Esenciales)
BANCO RIPLEY (Código SBIF: 053 - ver ficha - ver Hechos Esenciales)
RABOBANK CHILE (ex HNS BANCO) (Código SBIF: 054 - ver ficha - ver Hechos Esenciales) [ Ver Nota ** ]
BANCO CONSORCIO (ex BANCO MONEX) (Código SBIF: 055 - ver ficha - ver Hechos Esenciales)
BANCO PENTA (Código SBIF: 056 - ver ficha - ver Hechos Esenciales) [ Ver Nota * ]
BANCO BILBAO VIZCAYA ARGENTARIA, CHILE (BBVA)  (Código SBIF: 504 - ver ficha - ver Hechos Esenciales)
-Opera también con la marca BBVA Express
BANCO BTG PACTUAL CHILE (Código SBIF: 059 - ver ficha - ver Hechos Esenciales)
*/