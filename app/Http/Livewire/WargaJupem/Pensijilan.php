<?php

namespace App\Http\Livewire\WargaJupem;

use App\Models\Post;
use Livewire\Component;

class Pensijilan extends Component
{
    public function render()
    {
        return view('livewire.warga-jupem.pensijilan',[
            'pensijilan' => Post::where('id', '=', '95')->first(),
            'pensijilanQe' => Post::where('id', '=', '96')->first(),
        ]);
    }
}
