<?php

namespace App\Http\Livewire\InfoKorp;

use App\Models\Post;
use Livewire\Component;

class MengenaiPenglibatan extends Component
{
    public function render()
    {
        return view('livewire.info-korp.mengenai-penglibatan',[
            'post' => Post::where('id', '=', '93')->first()
        ]);
    }
}
