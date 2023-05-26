<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class materias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\materias::create([
            'nombre'=>'calculo integral'
        ]);

        \App\Models\materias::create([
            'nombre'=>'calculo diferencial'
        ]);

        \App\Models\materias::create([
            'nombre'=>'calculo vectorial'
        ]);
    }
}
