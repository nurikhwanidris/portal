<?php

namespace App\Http\Livewire\WargaJupem;

use App\Models\Post;
use Livewire\Component;

class Inovasi extends Component
{
    public function render()
    {
        return view('livewire.warga-jupem.inovasi',[
            'inovasi' => Post::where('id', '=', '442')->first()
        ]);
    }
}
