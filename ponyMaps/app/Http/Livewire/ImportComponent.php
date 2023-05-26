<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImportComponent extends Component
{

    public $abrir=false; 

    public function render()
    {
        return view('livewire.import-component');
    }
}
