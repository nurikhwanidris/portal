<?php

namespace App\Http\Livewire\OrangAwam;

use App\Models\Gis;
use Livewire\Component;

class BukuPenerbitan extends Component
{
    public function render()
    {
        return view('livewire.orang-awam.buku-penerbitan',[
            'gis' => Gis::orderBy('created_at', 'desc')->get()
        ]);
    }
}
