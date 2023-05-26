<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class horarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\horarios::create([
            'inicio'=>'7:00',
            'fin'=>'8:00',
            'edificio'=>'K',
            'salon'=>'K3',
            'dia'=>'lunes',
            'materia'=>'Calculo'
        ]);

        \App\Models\horarios::create([
            'inicio'=>'8:00',
            'fin'=>'9:00',
            'edificio'=>'K',
            'salon'=>'K3',
            'dia'=>'lunes',
            'materia'=>'Calculo'
        ]);

        \App\Models\horarios::create([
            'inicio'=>'9:00',
            'fin'=>'10:00',
            'edificio'=>'K',
            'salon'=>'K3',
            'dia'=>'lunes',
            'materia'=>'Calculo'
        ]);
    }
}
