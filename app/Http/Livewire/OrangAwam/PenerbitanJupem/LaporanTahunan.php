<?php

namespace App\Http\Livewire\OrangAwam\PenerbitanJupem;

use Livewire\Component;
use App\Models\LaporanTahunan as ModelLaporanTahunan;

class LaporanTahunan extends Component
{
    public function render()
    {
        return view('livewire.orang-awam.penerbitan-jupem.laporan-tahunan',[
            'laporan_tahunan' => ModelLaporanTahunan::orderBy('created_at', 'desc')->get(),
        ]);
    }
}
