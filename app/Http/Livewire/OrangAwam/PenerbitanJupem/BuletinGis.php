<?php

namespace App\Http\Livewire\OrangAwam\PenerbitanJupem;

use Livewire\Component;
use App\Models\BeritaUkur;
use App\Models\Gis;
use App\Models\LaporanTahunan;

class BuletinGis extends Component
{
    public function render()
    {
        return view('livewire.orang-awam.penerbitan-jupem.buletin-gis', [
            'gis' => Gis::orderBy('created_at', 'desc')->get(),
        ]);
    }
}
