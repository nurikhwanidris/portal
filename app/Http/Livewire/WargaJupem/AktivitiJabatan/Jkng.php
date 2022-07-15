<?php

namespace App\Http\Livewire\WargaJupem\AktivitiJabatan;

use Livewire\Component;
use App\Models\Page;

class Jkng extends Component
{
    public function render()
    {
        return view('livewire.warga-jupem.aktiviti-jabatan.jkng',[
            'history' => Page::where('id', '14')->first(),
            'terms' => Page::where('id', '15')->first(),
            'guidelines1' => Page::where('id', '16')->first(),
            'guidelines2' => Page::where('id', '17')->first(),
            'lists' => Page::where('id', '18')->first(),
        ]);
    }
}
