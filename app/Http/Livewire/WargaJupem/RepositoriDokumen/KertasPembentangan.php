<?php

namespace App\Http\Livewire\WargaJupem\RepositoriDokumen;

use Livewire\Component;
use App\Models\Post;

class KertasPembentangan extends Component
{
    public function render()
    {
        return view('livewire.warga-jupem.repositori-dokumen.kertas-pembentangan', [
            'kertas_pembentangan' => Post::where('id', '=', '595')->first()
        ]);
    }
}
