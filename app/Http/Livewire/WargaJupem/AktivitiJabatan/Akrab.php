<?php

namespace App\Http\Livewire\WargaJupem\AktivitiJabatan;

use Livewire\Component;
use App\Models\Page;

class Akrab extends Component
{
    public function render()
    {
        return view('livewire.warga-jupem.aktiviti-jabatan.akrab',[
            'akrab' => Page::where('id', 13)->first(),
        ]);
    }
}
