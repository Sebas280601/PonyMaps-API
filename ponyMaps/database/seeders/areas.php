<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class areas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\areas::create([
            'nombre'=>'area 1',
            'id_edificio'=>1
        ]);

        \App\Models\areas::create([
            'nombre'=>'area 2',
            'id_edificio'=>2
        ]);

        \App\Models\areas::create([
            'nombre'=>'area 3',
            'id_edificio'=>3
        ]);
    }
}
