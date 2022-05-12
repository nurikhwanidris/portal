<?php

namespace App\Http\Livewire\InfoSemasa;

use App\Models\BeritaTerkini;
use Livewire\Component;

class Sorotan extends Component
{
    public function render()
    {
        return view('livewire.info-semasa.sorotan',[
            'sorotan' => BeritaTerkini::orderBy('created_at', 'desc')->get()
        ]);
    }
}
