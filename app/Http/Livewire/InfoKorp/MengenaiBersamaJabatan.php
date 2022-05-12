<?php

namespace App\Http\Livewire\InfoKorp;

use App\Models\Post;
use Livewire\Component;

class MengenaiBersamaJabatan extends Component
{
    public function render()
    {
        return view('livewire.info-korp.mengenai-bersama-jabatan',[
            'jabatan' => Post::where('id', '=', '102')->first(),
        ]);
    }
}
