<?php

namespace App\Http\Livewire\WargaJupem\AktivitiJabatan;

use Livewire\Component;
use App\Models\Page;

class Jpdsn extends Component
{
    public function render()
    {
        return view('livewire.warga-jupem.aktiviti-jabatan.jpdsn',[
            'history' => Page::where('id', 8)->first(),
            'members' => Page::where('id', 9)->first(),
            'terms' => Page::where('id', 10)->first(),
            'jawatankuasa' => Page::where('id', 11)->first(),
            'group' => Page::where('id', 12)->first(),
        ]);
    }
}
