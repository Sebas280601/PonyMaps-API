<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class edificios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\edificios::create([
            'nombre'=>'F',
            'descripcion'=>'Edificio de sistemas'
        ]);

        \App\Models\edificios::create([
            'nombre'=>'K',
            'descripcion'=>'Edificio de sistemas'
        ]);

        \App\Models\edificios::create([
            'nombre'=>'I',
            'descripcion'=>'Edificio administrativo de sistemas'
        ]);
    }
}
