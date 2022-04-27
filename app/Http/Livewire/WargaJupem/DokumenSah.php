<?php

namespace App\Http\Livewire\WargaJupem;

use App\Models\Post;
use Livewire\Component;

class DokumenSah extends Component
{
    public function render()
    {
        return view('livewire.warga-jupem.dokumen-sah',[
            'dokumen_sah' => Post::where('id', '=', '603')->first()
        ]);
    }
}
