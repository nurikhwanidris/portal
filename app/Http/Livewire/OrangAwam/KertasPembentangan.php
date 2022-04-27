<?php

namespace App\Http\Livewire\OrangAwam;

use App\Models\Post;
use Livewire\Component;

class KertasPembentangan extends Component
{
    public function render()
    {
        return view('livewire.orang-awam.kertas-pembentangan',[
            'kertas_pembentangan' => Post::where('id', '=', '442')->first()
        ]);
    }
}
