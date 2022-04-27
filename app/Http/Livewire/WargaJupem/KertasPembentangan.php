<?php

namespace App\Http\Livewire\WargaJupem;

use App\Models\Post;
use Livewire\Component;

class KertasPembentangan extends Component
{
    public function render()
    {
        return view('livewire.warga-jupem.kertas-pembentangan',[
            'kertas_pembentangan' => Post::where('id', '=', '595')->first()
        ]);
    }
}
