<?php

namespace App\Http\Livewire\InfoKorp;

use App\Models\Post;
use Livewire\Component;

class MengenaiAnugerah extends Component
{
    public function render()
    {
        return view('livewire.info-korp.mengenai-anugerah',[
            'anugerah' => Post::where('id', '=', '92')->first()
        ]);
    }
}
