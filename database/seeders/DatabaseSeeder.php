<?php

namespace Database\Seeders;

use App\Models\Specialtie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Specialtie::create([
            'name'=> 'Endocrinologia e Metabologia'
        ]);
        Specialtie::create([
            'name'=> 'Nutrologia'
        ]);
        Specialtie::create([
            'name'=> 'Neurologia'
        ]);
        Specialtie::create([
            'name'=> 'Psiquiatria'
        ]);
        Specialtie::create([
            'name'=> 'Clínica Médica'
        ]);
        Specialtie::create([
            'name'=> 'Pediatria'
        ]);
        Specialtie::create([
            'name'=> 'Alergologia e Imunologia'
        ]);
        Specialtie::create([
            'name'=> 'Cardiologia'
        ]);
        Specialtie::create([
            'name'=> 'Coloproctologia'
        ]);
        Specialtie::create([
            'name'=> 'Dermatologia'
        ]);
        Specialtie::create([
            'name'=> 'Fisioterapia'
        ]);
        Specialtie::create([
            'name'=> 'Fonoaudiologia'
        ]);
        Specialtie::create([
            'name'=> 'Gastroenterologia'
        ]);
        Specialtie::create([
            'name'=> 'Geriatria'
        ]);
        Specialtie::create([
            'name'=> 'Ginecologia'
        ]);
        Specialtie::create([
            'name'=> 'Infectologia'
        ]);
        Specialtie::create([
            'name'=> 'Mastologia'
        ]);
        Specialtie::create([
            'name'=> 'Medicina do Trabalho'
        ]);
        Specialtie::create([
            'name'=> 'Nefrologia'
        ]);
        Specialtie::create([
            'name'=> 'Neurocirurgia'
        ]);
        Specialtie::create([
            'name'=> 'Nutrição'
        ]);
        Specialtie::create([
            'name'=> 'Oftalmologia'
        ]);
        Specialtie::create([
            'name'=> 'Oncologia'
        ]);
        Specialtie::create([
            'name'=> 'Otorrinolaringologia'
        ]);
        Specialtie::create([
            'name'=> 'Ortopedia'
        ]);
        Specialtie::create([
            'name'=> 'Pneumologia'
        ]);
        Specialtie::create([
            'name'=> 'Reumatologia'
        ]);
        Specialtie::create([
            'name'=> 'Urologia'
        ]);
    }
}
